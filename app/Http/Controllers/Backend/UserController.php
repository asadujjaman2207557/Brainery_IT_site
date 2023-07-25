<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile'] = Profile::all();
        $data['allData'] = User::all();

        return view('backend.user.view-user', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/user/' . $user->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/user'), $filename);
            $user['image'] = $filename;
        }
        $user->save();
        $profile = new Profile;
        $profile->uid = $user->id;
        $profile->usertype = 'admin';
        $profile->mobile = $request->mobile;
        $profile->address = $request->address;
        $profile->about = $request->about;
        $profile->gender = $request->gender;
        $profile->nid = $request->nid;
        $profile->image = $request->image1;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/profile/' . $profile->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/profile'), $filename);
            $profile['image'] = $filename;
        }
        $profile->save();

        return redirect()->route('user.view')->with('success', 'User Updated Successfully');
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
        $editData['profile'] = Profile::where('uid',$id)->get();
        $editData['editData'] = User::find($id);
        //dd($editData);
        return view('backend.user.edit-user', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        $data->updated_by = Auth::user()->id;
        $data->name = $request->name;
        $data->email = $request->email;
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
        return redirect()->route('user.view')->with('success', 'About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
