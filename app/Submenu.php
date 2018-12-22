<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = [
        'id','menu_id', 'name', 'slug', 'serial',  'status',
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function page()
    {
        return $this->hasOne(Page::class);
    }
}
