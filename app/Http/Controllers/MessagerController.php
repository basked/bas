<?php

namespace App\Http\Controllers;

use App\Services\Messager\Mailer;
use App\Contracts\Messager\MessagerContract;
use App\Services\Messager\Telegram;
use App\Services\Messager\Viber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function PHPUnit\Util\Test;

class MessagerController extends Controller
{

     public function __construct()
     {
          app()->bind(MessagerContract::class, function ($app) {
             return new Telegram(new Http(), config('bots.bot'));
         });
     }

    public function send(MessagerContract $messager)
    {
        $messager->sendMessage(env('TELEGRAM_ID'), 'Покупка IPHONE 13S');
    }
}
