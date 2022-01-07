<?php

namespace App\Http\Controllers;
use App\Contracts\Video\VideoHosting;
use App\Services\Video\Vimeo;
use App\Services\Video\Youtube;
use Illuminate\Foundation\Application;
//use App\Contracts\Video\VideoHosting;
use Illuminate\Container\Container;


class VideoController extends Controller
{

    public function __construct()
    {
        app()->bind(VideoHosting::class,function (){
            // Сдесь можем заменить на Youtube
            return new Youtube();
        });
    }

    public function index(VideoHosting $service)
    {

//    $mehtods= get_class_methods(Application::class);
//    foreach ($mehtods as $m){
//        if( substr($m,0,7)=='getBind') {
//            dd($m, call_user_func(array(app(), $m))  );
//        }};

       return view('video', ['service' => $service]);
    }
}
