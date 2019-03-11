<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='posts';

    protected $fillable = [
        'User','Ticket','Lname','Status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
