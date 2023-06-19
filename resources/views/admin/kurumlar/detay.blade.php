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
                        <h4 class="title">Kurum Hakkinda Bilgiler</h4>


                    </div>
                    <div class="card-content">
                        <div class="card">
                            <div class="card-body">
                                <p>Kayıt Tarihi: {{$data[0]['created_at']}}</p>
                                <p>Kurum Sahibi Ad: {{ $data[0]['kurum_user_name'] }}</p>
                                <p>Kurum Sahibi Soyad: {{ $data[0]['kurum_user_surname'] }}</p>
                                <p>Kurum Adi : {{ $data[0]['kurum_adi']}}</p>
                                <p>Kurum Mail: {{ $data[0]['kurum_email'] }}</p>
                                <p>Telefon Numarası: {{ $data[0]['kurum_phonenumber']}}</p>
                                <p>Hakkında: {{ $data[0]['kurum_hakkinda]'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="" alt="E-LooPsAkademi" class="branding-logo dark-logo" style="width: 250px; height: 200px; border-radius: 100%; ">
                    <div class="content">
                        <h6 class="category text-gray"></h6>
                        <h4 class="card-title"></h4>
                        <p class="card-content">

                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection