@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                <div class="alert alert-primary" role="alert">
                    {{session('status')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Kurum Duzenle</h4>
                        <p class="category">{{$data[0]['name']}}</p>
                        <p class="category">Kurum Duzenle</p>
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.kurumlar.edit.post',['id'=>$data[0]['id']])}}" method="POST" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Sahibi Adi</label>
                                        <input type="text" class="form-control" name="kurum_user_name" value="{{$data[0]['kurum_user_name']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Sahibi Soyadi</label>
                                        <input type="text" class="form-control" name='kurum_user_surname' value="{{$data[0]['kurum_user_surname']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Adi</label>
                                        <input type="text" class="form-control" name='kurum_adi' value="{{$data[0]['kurum_adi']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Mail Adresi</label>
                                        <input type="mail" class="form-control" name='kurum_email' value="{{$data[0]['kurum_email']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Telefon Numarasi</label>
                                        <input type="text" class="form-control" name='kurum_phonenumber' value="{{$data[0]['kurum_phonenumber']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label>Kurum Sifresi</label>
                                        <input type="text" class="form-control" name='kurum_password'   value="{{$data[0]['kurum_password']}}" >
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group label-floating is-empty">
                                            <label> Kurum Hakkinda bilgileri giriniz.</label>
                                            <textarea class="form-control" rows="5" name='kurum_hakkinda' >{{$data[0]['kurum_hakkinda']}}</textarea>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Kurum Bilgilerini Guncelle</button>
                            <div class="clearfix"></div>
                        </form>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection