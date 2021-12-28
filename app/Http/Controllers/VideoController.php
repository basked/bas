<?php

namespace App\Http\Controllers;

use App\Contracts\Video\VideoHosting;

class VideoController extends Controller
{
    public function index(VideoHosting $service)
    {
        return view('video', ['service' => $service]);
    }
}
