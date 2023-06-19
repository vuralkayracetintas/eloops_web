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
                                <h1>KURUMA OZEL OLARAK AYARLANMADI</h1>
                                <h1>Video İçerikleri</h1>
                                <ul>
                                    <li>
                                        <h2>Video 1</h2>
                                        <video controls>
                                            <source src="video1.mp4" type="video/mp4">
                                            <!-- Alternatif formatlar için ek source etiketleri eklenebilir -->
                                            Tarayıcınız video desteği sağlamıyor.
                                        </video>
                                        video eklenme tarihi 
                                        video aciklamasi 
                                        ucret ?
                                    </li>

                                    <!-- Diğer video öğeleri için aynı yapıyı tekrarlayabilirsiniz -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection