<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AllMembersController extends Controller
{
    public function index()
    {
        return view('admin.all-members.index');
    }
}
