<?php

namespace App\Http\Controllers;

use App\Submenu;
use App\Menu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //serial
        $data = Submenu::latest()->first();
        //Relation with menu to pass menu_id from Menu model
        $id = $request->id;
        $menu=Menu::where('id', $id)->first();
        //Get Submenu for view
        $submenus = Submenu::where('menu_id', $menu->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('backend.menu.submenus', compact('submenus','menu', 'data'));
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
            'name' => 'required|max:25',
            'slug' => 'required|unique:submenus',
        ]);
        $input=$request->all();
        Submenu::create($input);
        return redirect('menus')->withMessage('Submenu created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Get Submenu for view
        $submenus = Submenu::find($id);
        return view('backend.menu.edit_submenu', compact('submenus','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submenu $submenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenu $submenu)
    {
        //
    }
}
