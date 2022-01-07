<?php


namespace App\Contracts\Messager;

interface MessagerContract
{
     function sendMessage($chat_id, $message );
}
