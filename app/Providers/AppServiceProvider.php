<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @var array
     */
    protected $repositories = [];

    /**
     * @var array
     */
    protected $policies = [];

    /**
     * AppServiceProvider constructor.
     *
     * @param $app
     */
    public function __construct($app)
    {
        parent::__construct($app);

        // Init app services
        $this->initServices();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['env'] = $this->app->environment();

        // Register service
        $this->registerServices();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootServices();
    }

    /**
     * App services binding
     *
     * @return void
     */
    protected function initServices()
    {
        $serviceBindings = config('service.bindings');

        foreach ($serviceBindings as $modelClass => $binding) {
            $contract = $binding['contract'] ?? null;
            $repository = $binding['repository'] ?? null;
            $policy = $binding['policy'] ?? null;
            $observer = $binding['observer'] ?? null;

            $this->repositories[] = [$contract, $repository, $modelClass];
            $this->observers[] = [$modelClass, $observer];
            $this->policies[] = [$modelClass, $policy];
        }
    }

    /**
     * App Model booting
     * @return void
     */
    protected function bootServices()
    {
        // Boot observers
        foreach ($this->observers as $observer) {
            list($modelClass, $observer) = $observer;
            $this->bootObserver($modelClass, $observer);
        }
    }

    /**
     * Boot Observer
     *
     * @param string|Model $model
     * @param $observer
     *
     * @return void
     */
    protected function bootObserver($model, $observer)
    {
        if (!class_exists($model) || !class_exists($observer)) {
            return;
        }
        $model::observe($observer);
    }

    /**
     * Register Repository, Observer, Policy
     * @return void
     */
    protected function registerServices()
    {
        // Register repository
        foreach ($this->repositories as $repository) {
            list($contract, $repository, $modelClass) = $repository;
            $this->registerRepository($contract, $repository, $modelClass);
        }

        // Register policies
        foreach ($this->policies as $policy) {
            list($modelClass, $policy) = $policy;
            $this->registerPolicy($modelClass, $policy);
        }
    }

    /**
     * Register Repository
     *
     * @param $contract
     * @param $repository
     * @param $model
     *
     * @return void
     */
    protected function registerRepository($contract, $repository, $model)
    {
        if (!class_exists($model) || !interface_exists($contract) || !class_exists($repository)) {
            return;
        }

        $this->app->bind($contract, function () use ($repository, $model) {
            return new $repository(new $model());
        });
    }

    /**
     * Register Policy
     *
     * @param $model
     * @param $policy
     *
     * @return void
     */
    protected function registerPolicy($model, $policy)
    {
        if (!class_exists($model) || !class_exists($policy)) {
            return;
        }
        Gate::policy($model, $policy);
    }
}
