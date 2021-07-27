<?php

return [
    'bindings' => [
        \App\Models\Store::class => [
            'contract' => \App\Repositories\Contracts\StoreRepository::class,
            'repository' => \App\Repositories\Eloquents\EloquentStoreRepository::class,
            'policy' => null,
            'observer' => \App\Observers\StoreObserver::class,
        ],
        \App\Models\UITemplate::class => [
            'contract' => \App\Repositories\Contracts\UITemplateRepository::class,
            'repository' => \App\Repositories\Eloquents\EloquentUITemplateRepository::class,
            'policy' => null,
            'observer' => \App\Observers\UITemplateObserver::class,
        ],
        \App\Models\Menu::class => [
            'contract' => \App\Repositories\Contracts\MenuRepository::class,
            'repository' => \App\Repositories\Eloquents\EloquentMenuRepository::class,
            'policy' => null,
            'observer' => \App\Observers\MenuObserver::class,
        ],
    ],
];
