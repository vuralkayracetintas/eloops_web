@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Icerikler</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>

                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Isim</th>
                                    <th>Aciklama</th>
                                    <th>Sil</th>

                                </tr>
                                
                            </thead>
                            @if($data ->isEmpty())
                                <td>HENUZ ICERIK YUKLENMEDI</td>
                                <p>Icerik Henuz Yuklenmedi</p>
                                @endif

                            @foreach($data as $key => $value)
                            <tbody>

                                <tr>
                                    <div class="col-md-12 row">

                                        <td>{{$value['video_baslik']}}</td>
                                        <td>{{$value['video_aciklama']}}</td>
                                    </div>

                                    <td>
                                        <a href="{{route('admin.icerikler.detay',['id'=>$value['id']])}}">Detay</a>

                                    </td>
                                    <td>
                                        <a href="">Sil</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$data->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection