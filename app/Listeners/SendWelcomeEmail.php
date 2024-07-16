<?php

namespace App\Listeners;

use App\Events\SendMail;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
        Mail::to($event->participant->email)->queue(new WelcomeEmail($event->participant));
        // $namefro = 'Nanenane 2024';
        // $data = array('name'=>$event->participant->lname, 'email' => $event->participant->email,'from' => $namefro);
        // Mail::to(['text'=>'welcomeMailTMP'], $data, function($message)use ($event) {
        //     $message->to($event->participant->email, $event->participant->name)->subject('Welcome to Nanenane Agricultural International Expo 2024!');
        //     $message->from('ps@nanenane.kilimo.go.tz','Nanenane Agricultural International Expo, 2024');
        // })->queue(new WelcomeEmail($event->participant));
    }
}
