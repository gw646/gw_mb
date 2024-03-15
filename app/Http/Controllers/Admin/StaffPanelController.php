<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StaffPanelController extends Controller
{
    public function index()
    {
        return view('admin.staff-panel.index');
    }
}
