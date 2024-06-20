<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Participants;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function save_user(Request $request){
        $user = DB::table('users')->where('bemail', $request['bemail'])->pluck('bemail');
        if($user == $request['bemail']){
            return response()->json(['exists' => 'Mobile Phone already exists']);
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
            if ($participant->save()){
                return response()->json(['success' => 'User registered Successfully']);   
            }else{
                return response()->json(['error' => 'Something went wrong!']);   
            }
        }
    }
}
