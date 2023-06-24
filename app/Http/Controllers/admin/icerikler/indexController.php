<?php

namespace App\Http\Controllers\admin\icerikler;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = Video::paginate(10);
        return view('admin.icerikler.index',['data'=>$data]);
    }

    public function detay()
     {

        
    
        
        $c = Video::where('id',request('id'))->count();
        if($c!=0){
            $data = Video::where('id',request('id'))->get();
            return view('admin.icerikler.detay',['data'=>$data]);
        }
        else{
            return redirect()->back();
        }
        return view('admin.icerikler.detay');
    }
}
