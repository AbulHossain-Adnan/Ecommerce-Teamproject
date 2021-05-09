<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\user\UserController;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
}
