<?php

namespace App\Http\Controllers;

use App\Models\Kategoriler;
use App\Models\videos;
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

    public function postVideoYukle(Request $request)
    {
       
        $validatedData = $request->validate([
            'video_baslik' => 'required',
            'video_aciklama' => 'required',
            'video_etiketler' => 'required',
            'kategori_id' => 'required',
            'video_yolu' => 'required',
            'video_dosya_yolu' => 'required',
            'video_ucret' => 'nullable|integer'
        ]);

        $video = videos::create($validatedData);

        if ($video) {
            return redirect()->back()->with('status', 'Video başarıyla yüklendi!');
        } else {
            return redirect()->back()->with('status', 'Video yüklenirken bir hata oluştu!');
        }
    }

}
