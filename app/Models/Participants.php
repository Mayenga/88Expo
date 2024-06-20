<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'bemail',
        'phone',
        'gender',
        'age',
        'country',
        'address',
        'organization',
        'organizationType',
        'registerAs',
    ];
}
