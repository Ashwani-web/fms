<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProfile extends Model
{

    protected $table = 'customer';
    
    protected $guarded = [
         'password',
       
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
