<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {

        $data['allData'] = Slider::all();
        return view('backend.slider.dashSlider_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.dashSlider_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->mintitle = $request->mintitle;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->tab1_title = $request->tab1_title;
        $slider->tab1_text = $request->tab1_text;
        $slider->url = $request->url;


        $slider->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/slider/' . $slider->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/slider'), $filename);
            $slider['image'] = $filename;
        }
        $slider->save();
        return redirect()->route('slider.view')->with('success', 'Slider Updated Successfully');
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
        $editData = Slider::find($id);
        return view('backend.slider.dashSlider_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Slider::find($id);
        $data->mintitle = $request->mintitle;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->tab1_title = $request->tab1_title;
        $data->tab1_text = $request->tab1_text;
        $data->url = $request->url;

        $data->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/slider/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/slider'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('slider.view')->with('success', 'Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Slider::destroy($id);
        return redirect()->route('slider.view')->with('success', 'Slider Deleted Successfully');
    }
}
