<?php


namespace App\Services\Shop;

use App\Contracts\Shop\ProductWriter;

class XmlProductWritter  implements ProductWriter
{
    public function write()
    {
        echo "XmlProductWritter";
    }

}
