<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfiguration extends Model
{
    protected $fillable = [
            'website_name',
            'website_email',
            'website_phone',
            'message',
            'company_name',
            'licence_number',
            'address',
            'owner_name',
            'owner_phone',
            'owner_email',
            'logo',
            'favicon',
    ];
}
