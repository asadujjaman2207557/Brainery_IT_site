<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Featur_cards;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data['countcourse'] = Featur_cards::count();
        $data['allData'] = Featur_cards::where('subtitle','course')->get();
        return view('backend.course.dashCourse_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.dashCourse_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Featur_cards;
        $course->title = $request->title;
        $course->subtitle = 'course';
        $course->description = $request->description;
        $course->tab1_title = $request->tab1_title;
        $course->tab1_text = $request->tab1_text;
        $course->tab2_title = $request->tab2_title;
        $course->tab2_text = $request->tab2_text;
        $course->tab3_title = $request->tab3_title;
        $course->tab3_text = $request->tab3_text;
        $course->price = $request->price;


        $course->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/svg/' . $course->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/svg'), $filename);
            $course['image'] = $filename;
        }
        $course->save();
        return redirect()->route('courses.view')->with('success', 'Course Updated Successfully');
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
        return view('backend.course.dashCourse_edit', compact('editData'));
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
        $data->price = $request->price;
        $data->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/svg/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/svg'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('courses.view')->with('success', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Featur_cards::destroy($id);
        return redirect()->route('courses.view')->with('success', 'Course Deleted Successfully');
    }
}
