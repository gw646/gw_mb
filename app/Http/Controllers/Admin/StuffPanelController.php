<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StuffPanelController extends Controller
{
    public function index()
    {
        return view('admin.stuff-panel.index');
    }
}
