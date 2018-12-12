<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks=Testimonial::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.testimonial.feedbacks', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.add_feedback');
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
            'name' => 'required',
            'designation' => 'required',
            'feedback' => 'required',
            'thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        Testimonial::create([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail->store('uploads/images/testimonial'),
            'designation' => $request->designation,
            'feedback' => $request->feedback,
            'status' => $request->status,
        ]);
        return redirect('feedbacks/create')->withMessage('Item Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $feedback)
    {
        return view('backend.testimonial.edit_feedback', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $feedback)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'feedback' => 'required',
            'thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $feedback->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'feedback' => $request->feedback,
            'status' => $request->status,
        ]);
        $isExist=$request->file('thumbnail');

        if ($isExist){

            $request->thumbnail->storeAs('/', $feedback->thumbnail );
        }
        return redirect('feedbacks')->withMessage('Feedback updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $feedback)
    {
        $feedback->delete();
        $image=$feedback->thumbnail;
        Storage::delete($image);
        return redirect('feedbacks')->withMessage('Feedback deleted!');
    }
}
