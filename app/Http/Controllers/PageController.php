<?php

namespace App\Http\Controllers;

use App\Page;
use App\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::with('submenu')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.page.pages', compact('pages'));
    }

    /**s
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($submenu_id)
    {
        $pageRecord = Page::where('submenu_id', $submenu_id)->first();
        if ($pageRecord){
            return $this->edit($pageRecord, $submenu_id);
        }
        return $this->create($submenu_id);


    }
    public function create($submenu_id){
        //Relation with menu to pass submenu_id from Menu model
        $submenu = Submenu::find($submenu_id);
        return view('backend.page.add_page', compact('submenu'));
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
            'submenu_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'before_thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
            'after_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
            'icon' => 'mimes:png',
        ]);
        $data = [
            'submenu_id' => $request->submenu_id,
            'title' => $request->title,
            'description' => $request->description,
            'feature_title' => $request->feature_title,
            'feature_text' => $request->description,
        ];

        if ($request->hasFile('before_thumbnail')) {
        $data['before_thumbnail'] = $request->before_thumbnail->store('uploads/images/pages');
        }
        if ($request->hasFile('after_thumbnail')) {
            $data['after_thumbnail'] = $request->after_thumbnail->store('uploads/images/pages');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $request->icon->store('uploads/images/pages');
        }

        $created=Page::create($data);

        //Submenu Actived
        if($created){
            Submenu::find($request->submenu_id)->update([
                'status' => 1,
            ]);
        }


        return redirect('pages')->withMessage('Page created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
//    public function edit(Page $page)
//    {
//        $menus=Menu::where('status',1)->get();
//        return view('backend.page.edit_page', compact('page', 'menus'));
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($pageRecord, $submenu_id)
    {
        $submenu = Submenu::find($submenu_id);
        return view('backend.page.edit_page', compact('pageRecord', 'submenu'));
    }
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'feature_title' => $request->feature_title,
            'feature_text' => $request->description,
        ];
        if ($request->hasFile('before_thumbnail')) {
            if (!is_null($page->before_thumbnail)){
                Storage::delete($page->before_thumbnail);
            }
            $data['before_thumbnail'] = $request->before_thumbnail->store('uploads/images/pages');
        }
        if ($request->hasFile('after_thumbnail')) {
        if (!is_null($page->after_thumbnail)) {
            Storage::delete($page->after_thumbnail);
        }
        $data['after_thumbnail'] = $request->after_thumbnail->store('uploads/images/pages');
    }
        if ($request->hasFile('icon')) {
            if (!is_null($page->icon)) {
                Storage::delete($page->icon);
            }
            $data['icon'] = $request->icon->store('uploads/images/pages');
        }
//        dd($data);

        $page->update($data);
        return redirect('pages')->withMessage('Page Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Page $page)
//    {
//        $page->delete();
//        return redirect('pages')->withMessage('Page deleted');
//    }
}
