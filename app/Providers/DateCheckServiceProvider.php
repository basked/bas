<?php


namespace App\Providers;



use Illuminate\Support\ServiceProvider;

class DateCheckServiceProvider extends ServiceProvider
{
    public function register()
    {
      $this->app->bind('dateCheck','App\Services\DateCheck');
    }

}
