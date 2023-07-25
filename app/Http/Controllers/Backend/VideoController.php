<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['countvideo'] = Video::count();
        $data['allData'] = Video::all();
        return view('backend.video.dashVideo_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.video.dashVideo_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = new Video;
        $video->url = $request->url;
        $video->project = $request->project;
        $video->tea = $request->tea;
        $video->employee = $request->employee;
        $video->awards = $request->awards;



        $video->save();
        return redirect()->route('videos.view')->with('success', 'Video Updated Successfully');
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
        $editData = Video::find($id);
        return view('backend.video.dashVideo_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Video::find($id);
        $data->url = $request->url;
        $data->project = $request->project;
        $data->tea = $request->tea;
        $data->employee = $request->employee;
        $data->awards = $request->awards;


        $data->save();
        return redirect()->route('videos.view')->with('success', 'Video Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
