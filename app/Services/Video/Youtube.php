<?php

namespace App\Services\Video;

use App\Contracts\Video\VideoHosting;

class Youtube implements  VideoHosting
{
    protected $random;

    public function __construct()
    {
        $this->random = rand(0, 100);
    }

    public function ShowVideoRandom()
    {
        return 'Youtube '. $this->random;

    }
}
