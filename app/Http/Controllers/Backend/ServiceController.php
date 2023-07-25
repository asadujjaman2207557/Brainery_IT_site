<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Featur_cards;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['countservice'] = Featur_cards::count();
        $data['allData'] = Featur_cards::where('subtitle','service')->get();
        return view('backend.service.dashService_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.dashService_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Featur_cards;
        $service->title = $request->title;
        $service->subtitle = 'service';
        $service->description = $request->description;
        $service->tab1_title = $request->tab1_title;
        $service->tab1_text = $request->tab1_text;
        $service->tab2_title = $request->tab2_title;
        $service->tab2_text = $request->tab2_text;
        $service->tab3_title = $request->tab3_title;
        $service->tab3_text = $request->tab3_text;


        $service->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/svg/' . $service->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/svg'), $filename);
            $service['image'] = $filename;
        }
        $service->save();
        return redirect()->route('services.view')->with('success', 'Service Updated Successfully');
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
        return view('backend.service.dashService_edit', compact('editData'));
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
            @unlink(public_path('images/svg/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/svg'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('services.view')->with('success', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Featur_cards::destroy($id);
        return redirect()->route('services.view')->with('success', 'Service Deleted Successfully');
    }
}
