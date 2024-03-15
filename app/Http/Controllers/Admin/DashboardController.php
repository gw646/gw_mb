<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $registrants = User::with('roles')
            ->whereHas('roles',function ($q){
                $q->where('name',REGISTRANTS);
            })->orderBy('created_at')->get();

        return view('admin.dashboard')
            ->with([
                'registrants'=>$registrants
            ]);
    }
}
