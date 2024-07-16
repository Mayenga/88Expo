<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Participants;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class RegisterController extends Controller
{
    public function save_user(Request $request){
        // $bemail = DB::table('participants')->where('bemail', $request['bemail'])->pluck('bemail');
        // return response()->json(['exists' => 'Details already exists : ' . $user]);
        $bemail = DB::select("SELECT bemail FROM participants WHERE bemail = '$request->bemail'");
        foreach($bemail As $values){
            $bemail = $values->bemail;
        }
        if($bemail == $request['bemail']){
            return response()->json(['exists' => 'Details already exists']);
        } else {
            $participant = new Participants;
            $participant->fname = $request->fname;
            $participant->mname = $request->mname;
            $participant->lname = $request->lname;
            $participant->bemail = $request->bemail;
            $participant->email = $request->email;
            $participant->gender = $request->gender;
            $participant->age = $request->age;
            $participant->country = $request->country;
            $participant->phone = $request->phone;
            $participant->country = $request->country;
            $participant->organization = $request->organization;
            $participant->organizationType = $request->organizationType;
            $participant->address = $request->address;
            $participant->registerAs = $request->registerAs;
            $participant->booth = $request->booth;
            $participant->other = $request->other;
            $participant->products = $request->products;
            $namefro = 'From Name';
            if ($participant->save()){
                // $data = array('name'=>$request->lname, 'email' => $request->email,'from' => $namefro);
                // Mail::send(['text'=>'welcomeMailTMP'], $data, function($message)use ($participant) {
                //     $message->to($participant->email, $participant->name)->subject('Welcome to Nanenane Agricultural International Expo 2024!');
                //     $message->from('ps@nanenane.kilimo.go.tz','Nanenane Agricultural International Expo, 2024');
                // });
                // event(new SendMail($participant));
                Mail::to($participant->email)->queue(new WelcomeEmail($participant));
                return response()->json(['success' => 'THANK YOU FOR REGISTERING FOR NANENANE AGRICULTURAL INTERNATIONAL EXPO, 2024']);   
            }else{
                return response()->json(['error' => 'Something went wrong!']);   
            }
        }
    }
}
