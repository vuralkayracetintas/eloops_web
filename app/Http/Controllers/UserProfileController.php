<?php

namespace App\Http\Controllers;

use App\Models\Kategoriler;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('front.users.profile');
    }
    public function create(){
        $data = Kategoriler::all();
        return view('front.kurum.addvideo',['data'=>$data]);
    }
}
