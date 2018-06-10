<?php

namespace App\Providers;

use App\Contracts\ApiRepository;
use App\Repositories\Eloquent\EloquentApiRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    private $repositories = [
        ApiRepository::class => EloquentApiRepository::class
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach($this->repositories as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }
}
