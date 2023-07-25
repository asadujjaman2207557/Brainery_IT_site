<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Featur_cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['countfeature'] = Featur_cards::count();
        $data['allData'] = Featur_cards::where('subtitle','feature')->get();
        return view('backend.feature.dashFeature_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.feature.dashFeature_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feature = new Featur_cards;
        $feature->title = $request->title;
        $feature->subtitle = 'feature';
        $feature->description = $request->description;
        $feature->tab1_title = $request->tab1_title;
        $feature->tab1_text = $request->tab1_text;
        $feature->tab2_title = $request->tab2_title;
        $feature->tab2_text = $request->tab2_text;
        $feature->tab3_title = $request->tab3_title;
        $feature->tab3_text = $request->tab3_text;


        $feature->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/features/' . $feature->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/features'), $filename);
            $feature['image'] = $filename;
        }
        $feature->save();
        return redirect()->route('features.view')->with('success', 'Feature Updated Successfully');
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
        return view('backend.feature.dashFeature_edit', compact('editData'));
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
            @unlink(public_path('images/features/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/features'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('features.view')->with('success', 'Feature Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
