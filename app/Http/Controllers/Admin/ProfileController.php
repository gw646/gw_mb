<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($id)
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
