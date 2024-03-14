<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CalendarOfEventsController extends Controller
{
    public function index()
    {
        return view('admin.calendar-of-events.index');
    }
}
