<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //public $table = "cotizacion";
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'email',
        'location',
        'website',
        'education',
        'skills',
        'profile',
        'experience',
    ];

}
