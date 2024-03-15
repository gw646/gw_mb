<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;

class PollController extends Controller
{
    public function create()
    {
        return view('admin.polls.create');
    }

    public function store(Request $request)
    {
        Poll::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Poll created successfully');
    }
}
