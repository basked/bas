<?php

namespace App\Http\Controllers;

use App\Contracts\Shop\ProductWriter;


class WriterController extends Controller
{
    public function index(ProductWriter $productWriter)
    {
      $productWriter->write() ;
    }
}
