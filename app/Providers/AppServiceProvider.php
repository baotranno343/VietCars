<?php

namespace App\Providers;

use App\Models\BrandsModel;
use Illuminate\Support\Facades\View;
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


        $brands = BrandsModel::orderByDesc('id')->get();
        $userTest = session("user");
        View::share('brands', $brands);

        View::share('userTest', $userTest);
        //
    }
}
