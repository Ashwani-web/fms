<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        Mail::to("dilip.enthuons@gmail.com")->send(new DemoEmail($objDemo));
    }

    public function sendMail(REQUEST $req)
    {
        print_r('dilip');
        print_r($req->all()); exit;
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        Mail::to("dilip.enthuons@gmail.com")->send(new DemoEmail($objDemo));
    }
}