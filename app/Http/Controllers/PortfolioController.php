<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Portfolio::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.portfolio.portfolio-items', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.portfolio.add_portfolio');
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
            'title' => 'required',
            'description' => 'required',
            'before_thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
            'after_thumbnail' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        Portfolio::create([
            'title' => $request->title,
            'before_thumbnail' => $request->before_thumbnail->store('uploads/images/portfolio'),
            'after_thumbnail' => $request->after_thumbnail->store('uploads/images/portfolio'),
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect('portfolio-items/create')->withMessage('Item Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio_item)
    {
        return view('backend.portfolio.show_item', compact('portfolio_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio_item)
    {
        return view('backend.portfolio.edit_portfolio', compact('portfolio_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio_item)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'before_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
            'after_thumbnail' => 'mimes:jpeg,bmp,jpg,png',
        ]);
        $portfolio_item->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        $isExistBeforeThumbnail=$request->file('before_thumbnail');
        if ($isExistBeforeThumbnail) {
            $request->before_thumbnail->storeAs('/', $portfolio_item->before_thumbnail);
        }
        $isExistAfterThumbnail=$request->file('after_thumbnail');
        if ($isExistAfterThumbnail) {
            $request->after_thumbnail->storeAs('/', $portfolio_item->after_thumbnail);
        }
        return redirect('portfolio-items')->withMessage('Portfolio item information updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio_item)
    {
        $portfolio_item->delete();
        $before_image = $portfolio_item->before_thumbnail;
        $after_image = $portfolio_item->after_thumbnail;
        Storage::delete([$before_image, $after_image]);
        return redirect('portfolio-items')->withMessage('Portfolio item Deleted');
    }
}
