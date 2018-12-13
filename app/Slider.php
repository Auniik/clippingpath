<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'thumbnail_wide',
        'thumbnail_wide_title',
        'thumbnail_square',
        'thumbnail_square_title',
        'background_thumbnail',
        'background_color',
        'background_text',
        'status',
    ];
}
