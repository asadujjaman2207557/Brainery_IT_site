<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.layouts.dashHome',  compact('user'));
    }
}
