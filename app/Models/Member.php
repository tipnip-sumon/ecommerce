<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    // public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'city',
    ];
    use HasFactory;
}
