<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client; 

class SmsController extends Controller
{
      
   
    public function appointment(Request $request)
    {
        return view('system.appointment');
         
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $senderNumber = getenv("TWILIO_PHONE");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages->create("+244 930 649 899", // to
                           [
                               
                               "body" => "E-barbear, A sua marcação foi marcada com sucesso, aguardamos por si.",
                               "from" => $senderNumber
                           ]
                  );

           dd("Mensagem enviada com sucesso!");       
    }
}
