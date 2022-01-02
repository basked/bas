<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class WriterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('writer','App\Services\Shop\TextProductWritter');
    }

}
