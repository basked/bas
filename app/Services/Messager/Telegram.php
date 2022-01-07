<?php
namespace App\Services\Messager;

use App\Contracts\Messager\MessagerContract;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class Telegram implements MessagerContract
{

    protected $http;
    protected $bot;
    const url = 'https://api.tlgr.org/bot';

    public function __construct(Http $http, $bot = '5058359738:AAFkfQgu-_y84RzU0lR5v0IgP4qNTwsYCKY')
    {
        $this->bot = $bot;
        $this->http = $http;
    }


    public function sendMessage($receiver, $message)
    {
        return $this->http::post(self::url . $this->bot . '/sendMessage',
            [
                'chat_id' => $receiver,
                'text' => $message,
                'parse_mode' => 'html'
            ]);
    }

    public function editMessage($chat_id, $message, $message_id)
    {
        return $this->http::post(self::url . $this->bot . '/editMessageText', [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html',
            'message_id' => $message_id
        ]);
    }

    public function sendDocument($cht_id, $file, $relay_message_id = null)
    {
        return $this->http::attach('document', Storage::get('/public/' . $file), 'doc3333ument.jpg')->post(self::url . $this->bot . '/sendDocument',
            [
                'chat_id' => $cht_id,
                'reply_to_message_id' => $relay_message_id,
            ]);
    }

    public function sendButtons($chat_id, $message, $button)
    {
        return $this->http::post(self::url . $this->bot . '/sendMessage', [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html',
            'reply_markup' => $button
        ]);
    }

    public function editButtons($chat_id, $message, $button, $message_id)
    {
        return $this->http::post(self::url . $this->bot . '/editMessageText', [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html',
            'reply_markup' => $button,
            'message_id' => $message_id
        ]);
    }

}
