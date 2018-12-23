<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =[
        'submenu_id',
        'before_thumbnail',
        'after_thumbnail',
        'title',
        'icon',
        'description',
        'feature_title',
        'feature_text',
    ];

    public function submenu()
    {
        return $this->belongsTo(Submenu::   class);
    }
}
