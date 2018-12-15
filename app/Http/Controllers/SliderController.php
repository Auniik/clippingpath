<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Slider::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.slider.sliders', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.add_slider');
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
            'thumbnail_wide_title' => 'max:160',
            'thumbnail_square_title' => 'max:160',
            'thumbnail_wide' =>'required|mimes:jpeg,bmp,jpg,png',
            'thumbnail_square' =>'required|mimes:jpeg,bmp,jpg,png',

        ]);
        $data = [
            'thumbnail_wide_title' => $request->thumbnail_wide_title,
            'thumbnail_square_title' => $request->thumbnail_square_title,
            'background_color' => $request->background_color,
            'thumbnail_wide' => $request->thumbnail_wide->store('uploads/images/slider'),
            'thumbnail_square' => $request->thumbnail_square->store('uploads/images/slider'),
            'status' => $request->status,

        ];


        Slider::create($data);
        return redirect('sliders/create')->withMessage('Item Created Successfully!');
    }

    public function save(Request $request)
    {
        $request->validate([
            'background_thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        $data = [
            'background_text' => $request->background_text,
            'status' => $request->status,
        ];

        if($request->hasFile('background_thumbnail')){
            $data['background_thumbnail'] = $request->background_thumbnail->store('uploads/images/slider');
        }

        Slider::create($data);
        return redirect('sliders/create')->withMessage('Item Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Slider $slider)
    {
        $request->validate([
            'thumbnail_wide_title' => 'max:160',
            'thumbnail_square_title' => 'max:160',
            'thumbnail_wide' => 'mimes:jpeg,bmp,jpg,png',
            'thumbnail_square' => 'mimes:jpeg,bmp,jpg,png',
            'background_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $data = [
            'thumbnail_wide_title' => $request->thumbnail_wide_title,
            'thumbnail_square_title' => $request->thumbnail_square_title,
            'background_color' => $request->background_color,
            'background_text' => $request->background_text,
            'status' => $request->status,
            ];

        if($request->hasFile('thumbnail_wide')){
            if(!is_null($slider->thumbnail_wide)){
                Storage::delete($slider->thumbnail_wide);
            }
            $data['thumbnail_wide'] =  $request->thumbnail_wide->store('uploads/images/slider');
        }
        if($request->hasFile('thumbnail_square')){
            if(!is_null($slider->thumbnail_square)){
                Storage::delete($slider->thumbnail_square);
            }
            $data['thumbnail_square'] =  $request->thumbnail_square->store('uploads/images/slider');
        }
        if($request->hasFile('background_thumbnail')){
            if(!is_null($slider->background_thumbnail)){
                Storage::delete($slider->background_thumbnail);
            }
            $data['background_thumbnail'] =  $request->background_thumbnail->store('uploads/images/slider');
        }

        $slider->update($data);

        return redirect('sliders')->withMessage('Item Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        if(!is_null($slider->thumbnail_square)){
            Storage::delete($slider->thumbnail_square);
        }
        if(!is_null($slider->background_thumbnail)){
            Storage::delete($slider->background_thumbnail);
        }
        if(!is_null($slider->thumbnail_wide)){
            Storage::delete($slider->thumbnail_wide);
        }
        return redirect('sliders')->withMessage('Slider Items deleted');

    }
}
