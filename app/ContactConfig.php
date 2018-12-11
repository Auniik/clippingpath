<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactConfig extends Model
{
    protected $fillable = [
        'location_one', 'address_one', 'location_two', 'address_two', 'location_three', 'address_three', 'google_maps',
    ];
}
