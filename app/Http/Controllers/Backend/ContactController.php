<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cotact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['countcontact'] = Cotact::count();
        $data['allData'] = Cotact::first();
        //dd($data);
        return view('backend.contact.dashContact_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact.dashContact_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Cotact;
        $contact->phone1 = $request->phone1;
        $contact->phone2 = $request->phone2;
        $contact->email1 = $request->email1;
        $contact->email2 = $request->email2;
        $contact->address = $request->address;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->instagram;
        $contact->linkedin = $request->linkedin;
        
        $contact->save();
        return redirect()->route('contact.view')->with('success', 'contact Updated Successfully');
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
        $editData = Cotact::find($id);
        return view('backend.contact.dashContact_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Cotact::find($id);
        $data->phone1 = $request->phone1;
        $data->phone2 = $request->phone2;
        $data->email1 = $request->email1;
        $data->email2 = $request->email2;
        $data->address = $request->address;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
       
        $data->save();
        return redirect()->route('contact.view')->with('success', 'contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
