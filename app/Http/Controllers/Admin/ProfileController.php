<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $registrants = User::with('questions')->with('roles')
            ->whereHas('roles',function ($q){
                $q->where('name',REGISTRANTS);
            })->orderBy('created_at')->get();

        return view('admin.profile.index')->with([
            'registrants'=>$registrants
        ]);
    }
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        if (empty($user)){
            toast('User Not found','error');
            return redirect()->back();
        }
        return view('admin.profile.edit')->with([
            'user'=>$user
        ]);
    }
}
