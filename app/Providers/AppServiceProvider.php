<?php

namespace App\Providers;

use App\Models\ContentType;
use App\Models\ProductType;
use App\Observers\ContentTypeObserver;
use App\Observers\ProductTypeObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ContentType::observe(ContentTypeObserver::class);
        ProductType::observe(ProductTypeObserver::class);
    }
}
