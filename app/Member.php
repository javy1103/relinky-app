<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function user() {
        return $this->morphOne('App\User', 'profile');
    }
}
