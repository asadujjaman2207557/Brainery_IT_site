<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Featur_cards;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index()
    {
        $data['countportfolio'] = Featur_cards::count();
        $data['allData'] = Featur_cards::where('subtitle','portfolio')->get();
        return view('backend.portfolio.dashPortfolio_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.dashPortfolio_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolio = new Featur_cards;
        $portfolio->title = $request->title;
        $portfolio->subtitle = 'portfolio';
        $portfolio->description = $request->description;
        $portfolio->tab1_title = $request->tab1_title;
        $portfolio->tab1_text = $request->tab1_text;
        $portfolio->tab2_title = $request->tab2_title;
        $portfolio->tab2_text = $request->tab2_text;
        $portfolio->tab3_title = $request->tab3_title;
        $portfolio->tab3_text = $request->tab3_text;


        $portfolio->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/portfolio/' . $portfolio->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $portfolio['image'] = $filename;
        }
        $portfolio->save();
        return redirect()->route('portfolios.view')->with('success', 'Portfolio Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Featur_cards::find($id);
        return view('backend.portfolio.dashPortfolio_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Featur_cards::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->tab1_title = $request->tab1_title;
        $data->tab1_text = $request->tab1_text;
        $data->tab2_title = $request->tab2_title;
        $data->tab2_text = $request->tab2_text;
        $data->tab3_title = $request->tab3_title;
        $data->tab3_text = $request->tab3_text;
        $data->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/portfolio/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('portfolios.view')->with('success', 'Portfolio Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Featur_cards::destroy($id);
        return redirect()->route('portfolios.view')->with('success', 'Portfolio Deleted Successfully');
    }
}
