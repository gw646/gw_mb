<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CmeManagementController extends Controller
{
    public function index()
    {
        return view('admin.cme-management.index');
    }
}
