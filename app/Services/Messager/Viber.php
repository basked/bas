<?php


namespace App\Services\Messager;


use App\Contracts\Messager\MessagerContract;

class Viber implements MessagerContract
{
    function sendMessage($receiver, $message)
    {
        echo 'Viber cообщение: ' . $message . ' отправлено пользователю ';
    }
}
