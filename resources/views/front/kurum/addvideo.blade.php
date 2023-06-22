@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Video Yükle yeni sayfa') }}</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="video_baslik" class="col-md-4 col-form-label text-md-right">{{ __('Video Başlığı') }}</label>

                            <div class="col-md-6">
                                <input id="video_baslik" type="text" class="form-control @error('video_baslik') is-invalid @enderror" name="video_baslik" value="{{ old('video_baslik') }}" required autofocus>

                                @error('video_baslik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video_aciklama" class="col-md-4 col-form-label text-md-right">{{ __('Video Açıklaması') }}</label>

                            <div class="col-md-6">
                                <textarea id="video_aciklama" class="form-control @error('video_aciklama') is-invalid @enderror" name="video_aciklama" required>{{ old('video_aciklama') }}</textarea>

                                @error('video_aciklama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="search_select_box row">
                            <label for="video_kategoriler" class="col-md-4 col-form-label text-md-right">{{ __('Video Kategorisi') }}</label>

                            <div class="col-md-6">
                                <select name="video_kategoriler" id="video_kategoriler" class="form-control @error('video_kategoriler') is-invalid @enderror" data-live-search="true">
                                    @foreach($data as $key => $value)
                                    <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                                @error('video_kategoriler')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video-tags" class="col-md-4 col-form-label text-md-right">{{ __('Etiketler') }}</label>

                            <div class="col-md-6">
                                <input id="video-tags" type="text" class="form-control @error('video-tags') is-invalid @enderror" name="video-tags" value="{{ old('video-tags') }}">

                                @error('video-tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video_kategoriler" class="col-md-4 col-form-label text-md-right">{{ __('Video Kategorisi') }}</label>

                            <div class="col-md-6">
                                <input id="video_kategoriler" type="text" class="form-control @error('video_kategoriler') is-invalid @enderror" name="video_kategoriler" value="{{ old('video_kategoriler') }}">

                                @error('video_kategoriler')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video_yolu" class="col-md-4 col-form-label text-md-right">{{ __('Video Dosyası') }}</label>

                            <div class="col-md-6">
                                <input id="video_yolu" type="file" class="form-control-file @error('video_yolu') is-invalid @enderror" name="video_yolu" required>

                                @error('video_yolu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video_dosya_yolu" class="col-md-4 col-form-label text-md-right">{{ __('Pdf yukle') }}</label>

                            <div class="col-md-6">
                                <input id="video_dosya_yolu" type="file" class="form-control-file @error('video_dosya_yolu') is-invalid @enderror" name="video_dosya_yolu" required>

                                @error('video_dosya_yolu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Video Yükle') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection