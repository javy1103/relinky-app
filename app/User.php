<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{

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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'profile_type', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() {
        return $this->morphTo();
    }
}
