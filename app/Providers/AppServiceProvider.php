<?php

namespace App\Providers;

use App\Contracts\Video\VideoHosting;

use App\Services\Video\Vimeo;
use App\Services\Video\Youtube;
use App\Contracts\Shop\ProductWriter;
use App\Services\Shop\XmlProductWritter;
use App\Services\Shop\TextProductWritter;
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
//        $this->app->bind(VideoHosting::class,function (){
//            // Сдесь можем заменить на Youtube
//            return new Vimeo();
//        });
        $this->app->bind(ProductWriter::class,function (){
            return new XmlProductWritter();
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
