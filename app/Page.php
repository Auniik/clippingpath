<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =[
        'submenu_id',
        'name',
        'slug',
        'before_thumbnail',
        'after_thumbnail',
        'title',
        'description'
    ];

    public function submenu()
    {
        return $this->belongsTo(Submenu::   class);
    }
}
