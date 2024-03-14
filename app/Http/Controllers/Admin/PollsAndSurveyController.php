<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PollsAndSurveyController extends Controller
{
    public function index()
    {
        return view('admin.polls-and-survey.index');
    }
}
