<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title['title'] = 'Dashboard';

        return view('dashboard', $title);
    }
}
