<?php

namespace App\Http\Controllers;

use App\ContactConfig;
use Illuminate\Http\Request;

class ContactConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
//    public function index(){
//        //
//    }

    public function configContact()
    {
        $contactRecord = ContactConfig::first();
        if ($contactRecord){
            return $this->edit($contactRecord);
        }
        return $this->create();
    }

    public function create()
    {
        return view('backend.contact.add_contact');
    }
    public function store(Request $request){
        $request->validate([
            'location_one' => 'required|max:255',
            'address_one' => 'required',
            'google_maps' => 'required',
        ]);
        $maps_in_iframe = $request->google_maps;
        preg_match('~iframe.*src="([^"]*)"~', $maps_in_iframe, $matches);
        if ($matches) {
            $maps_url = $matches[1];
            ContactConfig::create([
                'location_one' => $request->location_one,
                'address_one' => $request->address_one,
                'location_two' => $request->location_two,
                'address_two' => $request->address_two,
                'location_three' => $request->location_three,
                'address_three' => $request->address_three,
                'google_maps' => $maps_url,
            ]);
            return redirect('contact/config')->withMessage('Contact Page information updated.');
        }
        return redirect('contact/config')->withMessage('Google Maps link is not valid');
    }

    public function edit($contactRecord)
    {
        return view('backend.contact.edit_contact', compact('contactRecord'));
    }
    public function update(Request $request){
        $request->validate([
            'location_one' => 'required|max:255',
            'address_one' => 'required',
            'google_maps' => 'required',
        ]);
        $contactConfig=ContactConfig::first();
        $maps_in_iframe = $request->google_maps;
        preg_match('~iframe.*src="([^"]*)"~', $maps_in_iframe, $matches);
        if ($matches) {
            $maps_url = $matches[1];
            $contactConfig->update([
                'location_one' => $request->location_one,
                'address_one' => $request->address_one,
                'location_two' => $request->location_two,
                'address_two' => $request->address_two,
                'location_three' => $request->location_three,
                'address_three' => $request->address_three,
                'google_maps' => $maps_url,
            ]);
            return redirect('contact/config')->withMessage('Contact Page information updated.');
        }
        return redirect('contact/config')->withMessage('Google Maps link is not valid');
    }
}
