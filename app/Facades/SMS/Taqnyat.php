<?php

namespace App\Facades\SMS;

use App\Repository\Contracts\SmsInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use function Symfony\Component\String\s;

class Taqnyat
{
    public static string $bearer;
    public static string $sendername;


    public static function data($number, $message ,$name): array
    {
        static::$sendername = 'Okemea';

        return [
            "messages" => [
                [
                    "text"       => $message,
                    "numbers"    => Arr::wrap(Str::replace('+','' ,$number )),
                    "number_iso" => "SA",
                    "sender"     => static::$sendername,
                ],
            ],
            "global"   => [
                "number_iso" => "SA",
                "sender"     => static::$sendername,
            ],
        ];
    }

    public static function send($number, $message , $name): object
    {
        self::auth();
        $taqnyt = new \TaqnyatSms(static::$bearer);
        $body = 'Okema Verification Code ' .$message;
        $recipients = [Str::replace('+966','5' ,$number )];
        $sender = static::$sendername;
        $smsId = '';
        $message =$taqnyt->sendMsg($body, $recipients, $sender, $smsId);


        return (object)['code' => json_decode($message)->statusCode, 'status' => true, 'message' => json_decode($message)->messageId ?? '' ];
    }

    private static function auth(): string
    {
        static::$bearer = config('taqnyat.bearer');
        static::$sendername = config('taqnyat.sendername');

        return base64_encode(static::$bearer);
    }
}
