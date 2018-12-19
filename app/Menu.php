<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =[
        'name', 'slug', 'serial',  'status',
    ];

    public function submenus()
    {
            return $this->hasMany(Submenu::class);
    }
}
