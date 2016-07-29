<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class User extends Authenticatable
{
    use SoftDeletes;

    // Activate || Deactivate Account
    public function toggleAccount() {
        $method = ( $this->deleted_at == null ) ? 'delete' : 'restore';
        $this->$method();
    }

    // Return boolean checks if account is active
    public function isActive() {
        return ( $this->deleted_at == null ) ? true : false;
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

    // Deleted Account
    protected $dates = [
        'deleted_at'
    ];

    // The attributes that are mass assignable.
    protected $fillable = [
        'name', 'username', 'profile_type', 'email', 'password'
    ];


    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Get profile relation
    public function profile() {
        return $this->morphTo();
    }
}
