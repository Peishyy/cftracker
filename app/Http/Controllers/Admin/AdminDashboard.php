<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index()
    {
        $page_title = 'Dahboard';

        return view('admin.dashboard', [
            'page_title' => $page_title,
        ]);
    }

}
