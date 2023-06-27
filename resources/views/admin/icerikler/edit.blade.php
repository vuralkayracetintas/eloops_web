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
                        <h4 class="title">Video Icerik Duzenle</h4>
                        <p class="category">{{$data[0]['name']}}</p>
                        <p class="category">Kurum Duzenle</p>
                    </div>
                    <div class="card-content">
                        <form action="{{route('admin.kurumlar.edit.post',['id'=>$data[0]['id']])}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label>Video Basligi</label>
                                        <input type="text" class="form-control" name="kurum_user_name" value="{{$data[0]['video_baslik']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group label-floating is-empty">
                                        <label> Video Aciklama</label>
                                        <textarea class="form-control" rows="5" name='kurum_hakkinda'>{{$data[0]['video_aciklama']}}</textarea>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Video Kategorisi</label>
                                        <select name="video_kategoriler" id="video_kategoriler" class="form-control @error('video_kategoriler') is-invalid @enderror">
                                            @foreach($data2 as $key => $value)
                                            <option @if($value['name']==$data[0]['video_kategoriler']) selected @endif value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Video Etiketleri</label>
                                        <input type="text" class="form-control" name='kurum_adi' value="{{$data[0]['video_tags']}}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Video Yolu</label>
                                        <input type="mail" class="form-control" name='kurum_email' value="{{$data[0]['video_yolu']}}" readonly->
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label>Video Dosya Yolu</label>
                                        <input type="text" class="form-control" name='kurum_phonenumber' value="{{$data[0]['video_dosya_yolu']}}" readonly>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="label">ONAY DURUMU</label>
                                    <select name="approved" class="form-control">
                                        <option value="0" @if($data[0]->approved == 0) selected @endif>Onay Bekliyor</option>
                                        <option value="1" @if($data[0]->approved == 1) selected @endif>Onaylandı</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Video Icerik Onayla/Duzenle</button>
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