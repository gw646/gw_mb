<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $specialists = User::with('roles')->whereHas('roles',function ($q){
            $q->where('name',SPECIALIST);
        })->orderByDesc('created_at')->get();
        return view('admin.profile.index')->with([
            'specialists'=>$specialists
        ]);
    }
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        if (empty($user)){
            toast('User Not found','error');
            return redirect()->back();
        }
        return view('admin.profile.index')->with([
            'user'=>$user
        ]);
    }
}
