
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row mt-5">
<div class="col-8 offset-2">
    <div class="row">
    <h2>Edit Profile</h2>
    </div>
    <div class="row">
        <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
        
            <div class="row">
                <label for="title" class="col-form-label">{{ __('Title') }}</label>
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('name') ?? $user->profile->title }}" autocomplete="name" autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <label for="description" class="col-form-label">{{ __('Description') }}</label>
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="name" autofocus>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <label for="url" class="col-form-label">{{ __('URL') }}</label>
                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')?? $user->profile->url  }}" autocomplete="name" autofocus>
                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="row">
                <label for="image" class="col-form-label">{{ __('Profile Image') }}</label>
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
                        {{ __('Save Profile') }}
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
