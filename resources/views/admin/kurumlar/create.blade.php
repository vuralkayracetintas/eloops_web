@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                @if(session('status'))
                <div class="alert alert-primary" role="alert">
                    {{session('status')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">E-LooPsAkademi</h4>
                        <p class="category">Yeni Kurum Olustur</p>
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.kurumlar.ekle.post')}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Yayin Evi Adi</label>
                                        <input type="text" name="name" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Yayin Evi Guncelle</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{asset('admin_css/assets/img/faces/marc.jpg')}}">
                        </a>
                    </div>
                    <div class="content">
                        <h6 class="category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-content">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Deneme Ui</h4>
                    <p class="category">Deneme UI</p>
                </div>
                <div class="card-content">
                    <form action="{{route('admin.kurumlar.ekle.post')}}" method="POST">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Kullanıcı Adı</label>
                                    <input type="text" class="form-control" name="kurum_user_name">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Soyadi</label>
                                    <input type="text" class="form-control" name='kurum_user_surname'>
                                    <span class="material-input"></span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Adi</label>
                                    <input type="text" class="form-control" name='kurum_adi'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Mail Adresi</label>
                                    <input type="mail" class="form-control" name='kurum_email'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Telefon Numarasi</label>
                                    <input type="text" class="form-control" name='kurum_phonenumber'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Sifresi</label>
                                    <input type="text" class="form-control"name = 'kurum_password'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hakkinda</label>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"> Kurum Hakkinda bilgileri giriniz.</label>
                                        <textarea class="form-control" rows="5" name= 'kurum_hakkinda'></textarea>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Kurum Olustur</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection