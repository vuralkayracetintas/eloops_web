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
                                    <h4 class="title">Kategori Duzenle</h4>
                                    <p class="category">{{$data[0]['name']}}</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.kategoriler.edit.post',['id' => $data[0]['id']])}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <div>
                                                        <h6>Kategori Adi</h6>
                                                    </div>
                                                    
                                                    <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control">

                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">kategori Duzenle</button>
                                        <div class="clearfix"></div>
                                    </form>
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
                    
                            </div>
                        </div>
                </div>
            </div>
@endsection