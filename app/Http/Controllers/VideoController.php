<?php

namespace App\Http\Controllers;

use App\Models\Kategoriler;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function create()
    {
        // Görünümü döndür
        $data = Kategoriler::all();
        return view('front.kurum.addvideo', ['data' => $data]);
    }

    public function store(Request $request)
    {

        
        $validatedData = $request->validate([
            'video_baslik' => 'required',
            'video_aciklama' => 'required',
            'video_kategoriler' => 'required',
            'video_tags' => 'required',
            'video_yolu' => 'required|file|mimetypes:video/mp4',
            'video_dosya_yolu' => 'required|file',
        ]);

        $videoYolu = $request->file('video_yolu');
        $videoDosyaYolu = $request->file('video_dosya_yolu');

        // Dosyaları kaydedin
        $videoYoluPath = $videoYolu->store('videos');
        $videoDosyaYoluPath = $videoDosyaYolu->store('dosyalar');

        $video = new Video();
        $video->video_baslik = $validatedData['video_baslik'];
        $video->video_aciklama = $validatedData['video_aciklama'];
        $video->video_kategoriler = $validatedData['video_kategoriler'];
        $video->video_tags = $validatedData['video_tags'];
        $video->video_yolu = $videoYoluPath;
        $video->video_dosya_yolu = $videoDosyaYoluPath;

        $file = $request->file('video_yolu');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('videos'), $fileName);
        $video->video_yolu = $fileName;

//         $fileName = $request->video->getClientOriginalName();
//         $filePath = 'videos/' . $fileName;
 
//         $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
 
//         // File URL to access the video in frontend
// //        $url = Storage::disk('public')->url($filePath);
 
//         if ($isFileUploaded) {
//             $video = new Video();
//             $video->title = $request->title;
//             $video->path = $filePath;
//             $video->save();
 
//             return back()
//             ->with('success','Video has been successfully uploaded.');
//         }
 
//         return back()
//             ->with('error','Unexpected error occured');

        
    


        $video->save();


        return redirect()->back()->with('status', 'Video başarıyla yüklendi.');
    }
}
