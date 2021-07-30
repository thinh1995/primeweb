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
        \App\Models\Page::class => [
            'contract' => \App\Repositories\Contracts\PageRepository::class,
            'repository' => \App\Repositories\Eloquents\EloquentPageRepository::class,
            'policy' => null,
            'observer' => \App\Observers\PageObserver::class,
        ],
        \App\Models\Category::class => [
            'contract' => \App\Repositories\Contracts\CategoryRepository::class,
            'repository' => \App\Repositories\Eloquents\EloquentCategoryRepository::class,
            'policy' => null,
            'observer' => \App\Observers\CategoryObserver::class,
        ],
    ],
];
