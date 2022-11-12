<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        return view('adminregistration');
    }

    public function registration(Request $request)
    {
        $admins = new Admin();
        $admins ->name = $request->input('name');
        $admins ->email = $request->input('email');
        $admins ->password = $request->input('password');
        $admins ->phone = $request->input('phone');
        $admins ->nid = $request->input('nid');
        $admins ->address = $request->input('address');
        $admins ->save();
        return redirect('adminregistration')->with('status',"Inserted successfully");

    }

    public function profile()
    {

        $admins = Admin::all();
        return view('adminprofile',compact('admins'));
    }
}
