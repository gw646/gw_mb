<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id',auth()->id())->with('questions')->first();
        return view('admin.profile.index')->with([
            'user'=>$user
        ]);
    }
    public function edit($id)
    {
        $user = User::with('questions')->where('id',$id)->first();
        if (empty($user)){
            toast('User Not found','error');
            return redirect()->back();
        }
        return view('admin.profile.edit')->with([
            'user'=>$user
        ]);
    }
}
