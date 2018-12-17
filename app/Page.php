<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =[
        'submenu_name',
        'slug',
        'before_thumbnail',
        'after_thumbnail',
        'title',
        'description',
        'status',
        'menu_id',
    ];
}
