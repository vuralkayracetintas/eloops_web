<?php

namespace App\Http\Controllers\admin\ogrenciler;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = User::paginate(10);
        return view('admin.ogrenciler.index',['data'=>$data]);
    }

    public function create(){
        return view('admin.ogrenciler.create');
    }
    public function detay(){
        $c = User::where('id',request('id'))->count();
        if($c!=0){
            $data = User::where('id',request('id'))->get();
            return view('admin.ogrenciler.detay',['data'=>$data]);}
            else{
                return redirect()->back();
            }
        
    }
}
