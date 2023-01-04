<?php

namespace App\Providers;

use App\Repository\BuyerRepo;
use App\Repository\Eloquent\BuyerInterface;
use App\Repository\Eloquent\PersonInterface;
use App\Repository\Eloquent\SellerInterface;
use App\Repository\Eloquent\UserInterface;
use App\Repository\PersonRepo;
use App\Repository\SellerRepo;
use App\Repository\UserRepo;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PersonInterface::class, PersonRepo::class);
        $this->app->bind(BuyerInterface::class, BuyerRepo::class);
        $this->app->bind(SellerInterface::class, SellerRepo::class);
        $this->app->bind(UserInterface::class, UserRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
