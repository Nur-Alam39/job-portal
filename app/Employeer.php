<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employeer extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = 'employeer';

        protected $fillable = [
            'name', 'email', 'password','website', 'address', 'mobile','company_type'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
