<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteConfigurationController extends Controller
{
    public function index(){
        return view('backend.configs.edit_config');
    }
}
