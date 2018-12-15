<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
      'name', 'designation', '', 'feedback', 'status'
    ];
}
