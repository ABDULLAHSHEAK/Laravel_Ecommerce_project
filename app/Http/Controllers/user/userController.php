<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function user()
    {
        return view('admin.dashboard');
    }

}
