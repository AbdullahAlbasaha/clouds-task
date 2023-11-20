<?php

namespace App\Providers;

use App\Models\Customer;
use Laravel\Cashier\Cashier;
use App\Services\Services\LoginService;
use Illuminate\Support\ServiceProvider;
use App\Services\Services\LogoutService;
use App\Services\Contracts\LoginContract;
use App\Services\Contracts\LogoutContract;
use App\Http\Controllers\Frontend\Singleton\RegisterSingleton;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LoginService', LoginService::class);
        $this->app->bind(LogoutContract::class, LogoutService::class);


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cashier::useCustomerModel(Customer::class);
    }
}
