<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $data=[
            'fname' => Auth::user()->name,
            'appl' => ENV('APP_NAME'),
        ];

            return Inertia::render('Dashboard/Index', $data);
    }
}
