<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class User extends Authenticatable
{

    public function toggleAcct($input) {
        return $this->update(['isActive' => $input]);
    }

    //check if is current user
    public function isCurrentUser() {
        return ( Auth::user() && Auth::user()->id == $this->id ) ? true : false ;
    }

    //Getting editable attributes
    public static function getAttrs() {
        return [
            'name', 'username', 'email', 'password'
        ];
    }

    // The attributes that are mass assignable.
    protected $fillable = [
        'name', 'username', 'profile_type', 'email', 'password', 'isActive'
    ];

    // protected $casts = ['isActive' => 'boolean'];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Get profile relation
    public function profile() {
        return $this->morphTo();
    }
}
