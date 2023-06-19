@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>Kayıt Tarihi: {{ Auth::user()->created_at }}</p>
                    <p>Ad: {{ Auth::user()->name }}</p>
                    <p>Soyad: {{ Auth::user()->surname }}</p>
                    <p>Kullanıcı Adı: {{ Auth::user()->username }}</p>
                    <p>Mail: {{ Auth::user()->email }}</p>
                    <p>Telefon Numarası: {{ Auth::user()->phonenumber }}</p>
                    <p>Hakkında: {{ Auth::user()->hakkinda }}</p>
                    <p>Sifre : {{Auth::user()->password}}</p>


                </div>



            </div>
        </div>
    </div>
</div>
@endsection