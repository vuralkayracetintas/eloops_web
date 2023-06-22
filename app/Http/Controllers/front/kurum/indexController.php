<?php

namespace App\Http\Controllers\front\kurum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('front.kurum.index');
    }
}
