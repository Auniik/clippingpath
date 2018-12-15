<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    //frontend
    public  function allBlog()
    {
        $blogs=Blog::where('status',1)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.blog.blogs', compact('blogs'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.blog.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.add_blog');
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
        Blog::create([
            'headline' => $request->headline,
            'thumbnail' => $request->thumbnail->store('uploads/images/blog'),
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect('blogs/create')->withMessage('Blog Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit_blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'headline' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $blog->update([
            'headline' => $request->headline,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        $isExist=$request->file('thumbnail');
        if ($isExist) {
            $request->thumbnail->storeAs('/', $blog->thumbnail);
        }
        return redirect('blogs')->withMessage('Blog  information updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        $image = $blog->thumbnail;
        Storage::delete($image);
        return redirect('blogs')->withMessage('Blog Deleted');
    }
}
