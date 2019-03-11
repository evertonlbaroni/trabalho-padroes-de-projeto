<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = [
        'name',
        'email',
        'password'
    ];
    //
}
