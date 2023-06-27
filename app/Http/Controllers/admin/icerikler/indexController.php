<?php

namespace App\Http\Controllers\admin\icerikler;

use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
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

    public function delete($id)
    {
        $c = Video::where('id', $id)->count();
        if ($c != 0) {
            try {
                $delete = Video::where('id', $id)->delete();
                if ($delete) {
                    return redirect()->back()->with('status', 'Video başarıyla silindi.');
                } else {
                    return redirect()->back()->with('status', 'Video silinirken bir hata olustu.');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('status', 'Video silinirken bir hata oluştu.');
            }
        }
    }

    public function edit($id){
        
        $c = Video::where('id',$id)->count();
        if($c!=0){
            $data = Video::where('id',$id)->get();
            $data2 = Kategoriler::all();
            return view('admin.icerikler.edit',['data'=>$data,'data2'=>$data2]);
        }
        else{
            return redirect()->back();
        }
    }
}
