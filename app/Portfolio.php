<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title', 'before_thumbnail', 'after_thumbnail', 'description' , 'status',
    ];
}
