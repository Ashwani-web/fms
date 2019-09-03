<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class ClassProviders extends Authenticatable
{
    
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $user;
    protected $guard = 'classproviders';
    protected $table = 'class_provider';

    protected $fillable = [
        'name', 'email', 'password','phone_number','user_type',
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    
}

