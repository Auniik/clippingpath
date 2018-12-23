<?php

namespace App\Http\Controllers;

use App\SiteConfiguration;
use Illuminate\Http\Request;

class SiteConfigurationController extends Controller
{
    public function index(){
        $configRecord = SiteConfiguration::first();
        if ($configRecord){
            return $this->edit($configRecord);
        }
        return $this->create();
    }

    public function create()
    {
        return view('backend.config.add_config');
    }
    public function store(Request $request){
        $request->validate([
            'website_name' => 'required|max:255',
            'website_email' => 'required|email|max:255',
            'website_phone' => 'required',
            'message' => 'required',
            'company_name' => 'required|max:255',
            'licence_number' => 'required|max:255',
            'address' => 'required',
            'owner_name' => 'required|max:255',
            'owner_phone' => 'required|max:255',
            'owner_email' => 'required|email|max:255',
            'logo' => 'required|mimes:jpeg,bmp,jpg,png',
            'favicon' => 'required|mimes:ico,png',
        ]);
        SiteConfiguration::create([
            'website_name' => $request->website_name,
            'website_email' => $request->website_email,
            'website_phone' => $request->website_phone,
            'message' => $request->message,
            'company_name' => $request->company_name,
            'licence_number' => $request->licence_number,
            'address' => $request->address,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
            'logo' => $request->logo->store('uploads/images/logo'),
            'favicon' => $request->favicon->store('uploads/favicon'),
        ]);
        return redirect('/settings')->withMessage('Site information updated.');
    }

    public function edit($configRecord)
    {

        return view('backend.config.edit_config', compact('configRecord'));
    }
    public function update(Request $request){
        $request->validate([
            'website_name' => 'required|max:255',
            'website_email' => 'required|email|max:255',
            'website_phone' => 'required',
            'message' => 'required',
            'company_name' => 'required|max:255',
            'licence_number' => 'required|max:255',
            'address' => 'required',
            'owner_name' => 'required|max:255',
            'owner_phone' => 'required|max:255',
            'owner_email' => 'required|email|max:255',
            'logo' => 'mimes:jpeg,bmp,jpg,png',
            'favicon' => 'mimes:ico,png',
        ]);
        $config=SiteConfiguration::first();
        $config->update([
            'website_name' => $request->website_name,
            'website_email' => $request->website_email,
            'website_phone' => $request->website_phone,
            'message' => $request->message,
            'company_name' => $request->company_name,
            'licence_number' => $request->licence_number,
            'address' => $request->address,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
        ]);
        $isExist=$request->file('logo');
        $isExistIcon=$request->file('favicon');
        if ($isExist) {
            $request->logo->storeAs('/', $config->logo);
        }
        if ($isExistIcon) {
            $request->favicon->storeAs('/', $config->favicon);
        }

        return redirect('/settings')->withMessage('Site information updated.');
    }

}
