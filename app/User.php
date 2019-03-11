<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';

    protected $fillable = [
        'last_name', 'first_name', 'middle_name', 'head_facility','role_id', 'is_admin', 
        'username', 'email', 'mobile_number', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userRole(){
      return $this->hasOne('App\UserRole','id','role_id');
    }
    
}
