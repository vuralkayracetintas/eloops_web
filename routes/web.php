<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\admin\ogrenciler\indexController as OgrenciIndexController;
use App\Http\Controllers\admin\kurumlar\indexController as KurumlarIndexController;
use App\Http\Controllers\admin\kategoriler\indexController as KategorilerIndexController;
use App\Http\Controllers\VideoController ;

use App\Http\Controllers\UserProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Input;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserProfileController::class, 'index'])->name('front.user.profile');
Route::post('/profile', [UserProfileController::class, 'store'])->name('front.user.profile.store');


//Route::get('/icerikuret',[UserProfileController::class,'create'])->name('front.kurum.addvideo')->middleware('auth','KurumKontroller');
Route::get('/icerikuret', [VideoController::class,'create'])->name('front.kurum.addvideo')->middleware('auth','KurumKontroller');
Route::post('/icerikuret', [VideoController::class,'store'])->name('front.kurum.addvideo.post')->middleware('auth','KurumKontroller');



//Route::group(['namespace'=>''])





Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.', 'middleware'=>['auth','AdminControl'] ],function(){
    Route::get('/',[indexController::class,'index'])->name('index');
    

    Route::group(['namespace'=>'ogrenciler','prefix'=>'ogrenciler','as'=>'ogrenciler.'],function(){
      Route::get('/',[OgrenciIndexController::class,'index'])->name('index');
      Route::get('/detay',[OgrenciIndexController::class,'detay'])->name('detay');
      Route::get('/ekle',[OgrenciIndexController::class,'ekle'])->name('ekle');
      Route::post('/ekle',[OgrenciIndexController::class,'store'])->name('ekle.post');
      Route::get('/duzenle/{id}',[OgrenciIndexController::class,'edit'])->name('edit');
      Route::post('/duzenle/{id}',[OgrenciIndexController::class,'update'])->name('edit.post');
      Route::get('/sil/{id}',[OgrenciIndexController::class,'delete'])->name('delete');});

    Route::group(['namespace'=>'kurumlar','prefix'=>'kurumlar','as'=>'kurumlar.'],function(){
      Route::get('/',[KurumlarIndexController::class,'index'])->name('index');
      Route::get('/detay',[KurumlarIndexController::class,'detay'])->name('detay');
      Route::get('/icerikler',[KurumlarIndexController::class,'icerikler'])->name('icerik');
      Route::post('/icerikler',[KurumlarIndexController::class,'icerikler'])->name('icerik.post');
      Route::get('/ekle',[KurumlarIndexController::class,'create'])->name('ekle');
      Route::post('/ekle',[KurumlarIndexController::class,'store'])->name('ekle.post');
      Route::get('/duzenle/{id}',[KurumlarIndexController::class,'edit'])->name('edit');
      Route::post('/duzenle/{id}',[KurumlarIndexController::class,'update'])->name('edit.post');
      Route::get('/sil/{id}',[KurumlarIndexController::class,'delete'])->name('delete');
    });
    // Route::group(['namespace'=>'kitap','prefix'=>'kitap','as'=>'kitap.'],function(){
    //   Route::get('/',[KitapIndexController::class,'index'])->name('index');
    //   Route::get('/ekle',[KitapIndexController::class,'ekle'])->name('ekle');
    //   Route::post('/ekle',[KitapIndexController::class,'store'])->name('ekle.post');
    //   Route::get('/duzenle/{id}',[KitapIndexController::class,'edit'])->name('edit');
    //   Route::post('/duzenle/{id}',[KitapIndexController::class,'update'])->name('edit.post');
    //   Route::get('/sil/{id}',[KitapIndexController::class,'delete'])->name('delete');
    // });

    Route::group(['namespace'=>'kategoriler','prefix'=>'kategoriler','as'=>'kategoriler.'],function(){
      Route::get('/',[KategorilerIndexController::class,'index'])->name('index');
      Route::get('/ekle',[KategorilerIndexController::class,'ekle'])->name('ekle');
      Route::post('/ekle',[KategorilerIndexController::class,'store'])->name('ekle.post');
      Route::get('/duzenle/{id}',[KategorilerIndexController::class,'edit'])->name('edit');
      Route::post('/duzenle/{id}',[KategorilerIndexController::class,'update'])->name('edit.post');
      Route::get('/sil/{id}',[KategorilerIndexController::class,'delete'])->name('delete');
    });

    // Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function(){
    //   Route::get('/',[SliderIndexController::class,'index'])->name('index');
    //   Route::get('/ekle',[SliderIndexController::class,'create'])->name('ekle');
    //   Route::post('/ekle',[SliderIndexController::class,'store'])->name('ekle.post');
    //   Route::get('/duzenle/{id}',[SliderIndexController::class,'edit'])->name('edit');
    //   Route::post('/duzenle/{id}',[SliderIndexController::class,'update'])->name('edit.post');
    //   Route::get('/sil/{id}',[SliderIndexController::class,'delete'])->name('delete');
    // });
});
