@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">

        @if(session('status'))
        <div class="alert alert-primary" role="alert">
            {{session('status')}}
        </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Deneme Ui</h4>
                    <p class="category">Deneme UI</p>
                </div>
                <div class="card-content">
                    <form action="{{route('admin.kurumlar.ekle.post')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Sahibi Adi</label>
                                    <input type="text" class="form-control" name="kurum_user_name" >
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Kurum Sahibi Soyadi</label>
                                    <input type="text" class="form-control" name='kurum_user_surname'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                    <input type="text" class="form-control" name='kurum_password'>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"> Kurum Hakkinda Bilgiler Giriniz.</label>
                                        <textarea class="form-control" rows="5" name='kurum_hakkinda'></textarea>
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