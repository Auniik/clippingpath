<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.menu.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.add_page');
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
            'menu_id' => 'required',
            'submenu_name' => 'required|max:30',
            'slug' => 'required|unique:pages',
            'title' => 'required',
            'description' => 'required',
            'before_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
            'after_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $data = [
            'menu_id' => $request->menu_id,
            'submenu_name' => $request->submenu_name,
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ];
        if ($request->hasFile('before_thumbnail')) {
        $data['before_thumbnail'] = $request->before_thumbnail->store('uploads/images/pages');
        }
        if ($request->hasFile('after_thumbnail')) {
            $data['after_thumbnail'] = $request->after_thumbnail->store('uploads/images/pages');
        }

        Page::create($data);
        return redirect('pages/create')->withMessage('Page created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect('pages')->withMessage('Page deleted');
    }
}
