<?php
namespace App\Services\Messager;

use App\Contracts\Messager\MessagerContract;

class Mailer implements MessagerContract
{
    function sendMessage($chat_id, $message)
    {
        echo 'Email cообщение: '. $message. ' отправлено пользователю ';
    }
}
