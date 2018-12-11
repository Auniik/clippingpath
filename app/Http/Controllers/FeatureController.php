<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features=Feature::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.feature.features', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.feature.add_feature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'headline' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        Feature::create([
            'headline' => $request->headline,
            'thumbnail' => $request->thumbnail->store('uploads/images/features'),
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect('features/create')->withMessage('feature Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(feature $feature)
    {
//        return view('backend.feature.show_feature');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('backend.feature.edit_feature', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'headline' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $feature->update([
            'headline' => $request->headline,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        $isExist=$request->file('thumbnail');
        if ($isExist) {
            $request->thumbnail->storeAs('/', $feature->thumbnail);
        }
        return redirect('features')->withMessage('Feature  information updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(feature $feature)
    {
        $feature->delete();
        $image = $feature->thumbnail;
        Storage::delete($image);
        return redirect('features')->withMessage('Feature Deleted');
    }
}
