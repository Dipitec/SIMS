<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth_user extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(Auth_user_type::class);
    }
}
