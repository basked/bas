<?php

namespace App\Services\Messager;

use App\Contracts\Messager\MessagerContract;
use App\Notifications\MailMessagerNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class Mailer implements MessagerContract
{
    function sendMessage($chat_id, $message)
    {
       $mail= new MailMessagerNotification($message);
       $mail->toMail(76789);
    }
}
