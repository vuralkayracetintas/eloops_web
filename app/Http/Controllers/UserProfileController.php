<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
    public function create(){
        return view('user.kurum.addvideo');
    }
}
