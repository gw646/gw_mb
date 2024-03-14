<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SubCommitteesController extends Controller
{
    public function index()
    {
        return view('admin.sub-committees.index');
    }
}
