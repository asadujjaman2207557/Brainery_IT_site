<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {

        $data['allData'] = Testimonial::all();
        return view('backend.testimonial.dashTestimonial_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.dashTestimonial_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->user = $request->user;
        $testimonial->review = $request->review;



        $testimonial->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/testimonial/' . $testimonial->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/testimonial'), $filename);
            $testimonial['image'] = $filename;
        }
        $testimonial->save();
        return redirect()->route('testimonial.view')->with('success', 'testimonial Updated Successfully');
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
        $editData = Testimonial::find($id);
        return view('backend.testimonial.dashTestimonial_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Testimonial::find($id);
        $data->name = $request->name;
        $data->user = $request->user;
        $data->review = $request->review;

        $data->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/testimonial/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/testimonial'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('testimonial.view')->with('success', 'Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Testimonial::destroy($id);
        return redirect()->route('testimonial.view')->with('success', 'Testimonial Deleted Successfully');
    }
}
