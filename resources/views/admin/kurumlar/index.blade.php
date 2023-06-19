@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                      <a href="{{route('admin.kurumlar.ekle')}}" class="btn btn-primary">Kurum Ekleme sayfasi</a>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">E-LooPsAkademi</h4>
                                    <p class="category">Kurumlar</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr><th>Kurum Adi</th>
                                            <th>Duzenle</th>
                                            <th>Sil</th>                                        
                                        </tr></thead>
                                        @foreach($data as $key => $value)
                                        <tbody>
                                            <tr>
                                                <td>{{$value['kurum_adi']}} </td>
                                                <td>
                                                    <a href="{{route('admin.kurumlar.icerik')}}">Kurum Icerikleri</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.kurumlar.detay',['id'=>$value['id']])}}">Detay</a>
                                                
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.kurumlar.edit',['id'=>$value['id']])}}">Duzenle</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.kurumlar.delete',['id'=>$value['id']])}}">Sil</a>
                                                
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
