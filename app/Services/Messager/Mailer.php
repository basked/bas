<?php

namespace App\Services\Messager;

use App\Contracts\Messager\MessagerContract;
use App\Notifications\MailMessagerNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class Mailer implements MessagerContract
{
    function sendMessage($receiver, $message)
    {
        Mail::to($receiver)->send(new \App\Mail\MailMessage($message));

    }
}
