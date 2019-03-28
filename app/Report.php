<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	 protected $table = 'Report';
    protected $fillable = [
        'email', 'category', 'sub_category', 'receiver', 'level', 'status'
    ];
}
