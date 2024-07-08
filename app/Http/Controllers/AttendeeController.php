<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index(){
        $attendees = Participants::all();
        return view('users.admin.attenders', [
            "attendees" => $attendees
        ]);
    }

    public function create(){
        return '';
    }
}
