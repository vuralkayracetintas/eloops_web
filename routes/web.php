<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\admin\ogrenciler\indexController as OgrenciIndexController;
use App\Http\Controllers\admin\kurumlar\indexController as KurumlarIndexController;

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
Route::get('/profile', [UserProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [UserProfileController::class, 'store'])->name('profile.store');
Route::get('/icerikuret',[UserProfileController::class,'create'])->name('user.kurum.addvideo');





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

    // Route::group(['namespace'=>'kategori','prefix'=>'kategori','as'=>'kategori.'],function(){
    //   Route::get('/',[KategoriIndexController::class,'index'])->name('index');
    //   Route::get('/ekle',[KategoriIndexController::class,'ekle'])->name('ekle');
    //   Route::post('/ekle',[KategoriIndexController::class,'store'])->name('ekle.post');
    //   Route::get('/duzenle/{id}',[KategoriIndexController::class,'edit'])->name('edit');
    //   Route::post('/duzenle/{id}',[KategoriIndexController::class,'update'])->name('edit.post');
    //   Route::get('/sil/{id}',[KategoriIndexController::class,'delete'])->name('delete');
    // });

    // Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function(){
    //   Route::get('/',[SliderIndexController::class,'index'])->name('index');
    //   Route::get('/ekle',[SliderIndexController::class,'create'])->name('ekle');
    //   Route::post('/ekle',[SliderIndexController::class,'store'])->name('ekle.post');
    //   Route::get('/duzenle/{id}',[SliderIndexController::class,'edit'])->name('edit');
    //   Route::post('/duzenle/{id}',[SliderIndexController::class,'update'])->name('edit.post');
    //   Route::get('/sil/{id}',[SliderIndexController::class,'delete'])->name('delete');
    // });
});
