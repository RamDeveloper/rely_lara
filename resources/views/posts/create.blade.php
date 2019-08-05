@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('p') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <label for="caption" class="col-form-label">{{ __('Post Caption') }}</label>
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('name') }}" autocomplete="name" autofocus>
                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <label for="image" class="col-form-label">{{ __('Post Image') }}</label>
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-0 mt-3">
                <div class="col-md-6 type-align-left">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save Post') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
