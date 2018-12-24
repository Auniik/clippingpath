<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'service',
        'optional_service',
        'image_quantity',
        'yearly_quantity',
        'return_file_format',
        'additional_comment',
    ];
}
