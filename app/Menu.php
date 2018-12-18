<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =[
        'name', 'slug', 'serial',  'status',
    ];

    public function pages()
    {
            return $this->hasMany(Page::class);
    }
}
