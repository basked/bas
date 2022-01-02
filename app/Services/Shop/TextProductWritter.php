<?php


namespace App\Services\Shop;


use App\Contracts\Shop\ProductWriter;

class TextProductWritter implements ProductWriter
{

    public function write()
    {
        echo "TextProductWritter";
    }
}
