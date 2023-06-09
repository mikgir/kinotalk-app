<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(Request $request): View
    {
        return view('dashboard.dashboard-05', [
            'user' => $request->user(),
        ]);
    }
}
