<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aloha\Twilio\Twilio;

/**
 *  Не пишите, детки, логику в контроллерах. И конфиг данные тоже так хранить не надо
 *
 * Class TestTwilioController
 * @package App\Http\Controllers
 */
class TestTwilioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $accountId = 'ACb90d19c77d3344413c2c248da5c03c57';
        $token = 'ac9f3d722ba1ebfba9c6195d5342a500';
        $fromNumber = '+32460229047';
        $to = '+380966614887';
        $twilio = new Twilio($accountId, $token, $fromNumber);
        $twilio->message($to, 'Погнался за двумя зайцами, поймал трёх (c) Чак Норрис');
        //$twilio->call($to, 'http://foo.com/call.xml');
    }
}
