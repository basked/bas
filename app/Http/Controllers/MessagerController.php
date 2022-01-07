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
    function getImplementingClasses( $interfaceName ) {
        return array_filter(
            get_declared_classes(),
            function( $className ) use ( $interfaceName ) {
                return in_array( $interfaceName, class_implements( $className ) );
            }
        );
    }

    function whoImplements($interface_name) {
        if (interface_exists($interface_name)) {
            return array_filter(get_declared_classes(), create_function('$className', "return in_array(\"$interface_name\", class_implements(\"\$className\"));"));
        }
        else {
            return null;
        }
    }

    public function __construct()
    {


        app()->bind(MessagerContract::class, function ($app) {
            //   return new Mailer();
           return new Telegram(new Http(), config('bots.bot'));
        });

    }

    public function send(MessagerContract $messager)
    {

        if ($messager instanceof Telegram) {
            $messager->sendMessage(env('TELEGRAM_ID'), 'Покупка IPHONE 13S');
        }
        if ($messager instanceof Mailer) {
            $messager->sendMessage('basked.baza@gmil.com', 'Покупка IPHONE 13S');
        }
    }
}
