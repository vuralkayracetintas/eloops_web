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
                        <h4 class="title">Kurum Hakkinda Bilgiler</h4>


                    </div>
                    <div class="card-content">
                        <div class="card">
                            <div class="card-body">
                                <p>Video Basligi {{$data[0]['video_baslik']}}</p>
                                <p>Video Hakkinda: {{ $data[0]['video_aciklama'] }}</p>
                                <p>Video Kategorisi {{ $data[0]['video_kategoriler']}}</p>
                                <p>Video yolu : {{ $data[0]['video_yolu']}}</p>
                                <p>Dosya Yolu l {{$data[0]['video_dosya_yolu']}}</p>
                                <p>Video Etiketleri : {{$data[0]['video_tags']}}</p>
                                @if($data[0]['approved']===-0)
                                <p>Video Durumu : Onaylanmadi</p>
                                @else
                                <p>Video Durumu : Onaylandi</p>
                                @endif
                                @if(pathinfo($data[0]['video_yolu'], PATHINFO_EXTENSION) === 'mp4')
                                <video style="max-width: 100%; height: auto;" controls>
                                    <source src="{{asset('videos/' . $data[0]['video_yolu'])}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                @else
                                <p>Video dosyası bulunamadı.</p>
                                @endif
                                @if(pathinfo($data[0]['video_dosya_yolu'], PATHINFO_EXTENSION) === 'pdf')
                                <embed src="{{ asset('dosyalar/' . $data[0]['video_dosya_yolu']) }}" type="application/pdf" width="100%" height="600px" />
                                @else
                                <p>PDF dosyası bulunamadı.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection