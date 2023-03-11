<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        //
        //Add any field you want to be able to add to the db
        //when creating a table in the model of the table
        //or you write Model::unguard() 
        //in the boot fucntion of the AppServiceProvider.php file
        //and then import the Model class if its not imported
        Model::unguard();
    }
}
