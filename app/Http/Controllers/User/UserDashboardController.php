<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';

        return view('user.dashboard', [
            'page_title' => $page_title,
        ]);
    }
}
