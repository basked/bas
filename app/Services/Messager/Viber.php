<?php


namespace App\Services\Messager;


use App\Contracts\Messager\MessagerContract;

class Viber implements MessagerContract
{
    function sendMessage($chat_id, $message, $file = '')
    {
        echo 'Viber cообщение: ' . $message . ' отправлено пользователю ';
    }
}
