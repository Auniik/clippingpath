<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = [
        'menu_id', 'name', 'slug', 'serial',  'status',
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
