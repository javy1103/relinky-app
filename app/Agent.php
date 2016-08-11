<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function user() {
        return $this->morphOne('App\User', 'profile');
    }

    //Getting editable attributes
    public static function getAttrs() {
        return [
            'bio' => 'textarea',
            'title' => 'text',
            'phone' => 'text',
            'company' => 'text',
            'city' => 'text',
            'experience' => 'number' ];
    }
}
