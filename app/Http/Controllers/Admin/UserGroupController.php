<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class UserGroupController extends Controller
{
    public function index()
    {
        $roles = Role::withCount('users')->orderBy('id','DESC')->get();
        return view('admin.user-group.index')->with([
            'roles'=>$roles
        ]);
    }

    public function create()
    {
        return view('admin.user-group.create');
    }
}
