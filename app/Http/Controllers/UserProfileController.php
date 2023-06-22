<?php

namespace App\Http\Controllers;

use App\Models\Kategoriler;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
    public function create(){
        $data = Kategoriler::all();
        return view('user.kurum.addvideo',['data'=>$data]);
    }
}
