@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Video Yükle') }}</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="video-title" class="col-md-4 col-form-label text-md-right">{{ __('Video Başlığı') }}</label>

                            <div class="col-md-6">
                                <input id="video-title" type="text" class="form-control @error('video-title') is-invalid @enderror" name="video-title" value="{{ old('video-title') }}" required autofocus>

                                @error('video-title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video-description" class="col-md-4 col-form-label text-md-right">{{ __('Video Açıklaması') }}</label>

                            <div class="col-md-6">
                                <textarea id="video-description" class="form-control @error('video-description') is-invalid @enderror" name="video-description" required>{{ old('video-description') }}</textarea>

                                @error('video-description')
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
                            <label for="video-file" class="col-md-4 col-form-label text-md-right">{{ __('Video Dosyası') }}</label>

                            <div class="col-md-6">
                                <input id="video-file" type="file" class="form-control-file @error('video-file') is-invalid @enderror" name="video-file" required>

                                @error('video-file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video-file" class="col-md-4 col-form-label text-md-right">{{ __('Pdf yukle') }}</label>

                            <div class="col-md-6">
                                <input id="doc-file" type="file" class="form-control-file @error('doc-file') is-invalid @enderror" name="doc-file" required>

                                @error('doc-file')
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