<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['countabout'] = About::count();
        $data['allData'] = About::all();
        return view('backend.about.dashAbout_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.dashAbout_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->mision = $request->mision;
        $about->vision = $request->vision;
        $about->goal = $request->goal;
        $about->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/other_images/' . $about->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/other_images'), $filename);
            $about['image'] = $filename;
        }
        $about->save();
        return redirect()->route('about.view')->with('success', 'About Updated Successfully');
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
        $editData = About::find($id);
        return view('backend.about.dashAbout_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = About::find($id);
        $data->updated_by = Auth::user()->id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->mision = $request->mision;
        $data->vision = $request->vision;
        $data->goal = $request->goal;
        $data->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/other_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/other_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('about.view')->with('success', 'About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
