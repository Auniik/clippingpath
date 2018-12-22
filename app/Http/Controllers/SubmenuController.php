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
//        $data = Submenu::latest()->first();
        $submenus= Submenu::orderBy('created_at', 'asc')->paginate(5);

        return view('backend.menu.submenu.submenus', compact('submenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($menu_id)
    {
        //Serial
        $data = Submenu::latest()->first();
        //Relation with menu to pass menu_id from Menu model
        $menu=Menu::find($menu_id);

        //Get Submenu for List view
        $submenus = Submenu::where('menu_id', $menu_id)->orderBy('created_at', 'asc')->paginate(10);

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
//        dd($input);
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
        return view('backend.menu.edit_submenu', compact('submenus'));
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
        $request->validate([
            'menu_id' => 'required',
            'name' => 'required|max:25',
            'slug' => 'required|unique:submenus,slug,'.$submenu->id,
        ]);
        $input = $request->all();
        $submenu->update($input);
        return redirect('menus')->withMessage('Submenu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenu $submenu)
    {
        $submenu->delete();
        return redirect('menus')->withMessage('Submenu Deleted');
    }
}
