<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth_user_type extends Model
{
    protected $guarded = [];

    Public function userType()
    {
       return $this->hasMany(Auth_user::class);
    }

}
