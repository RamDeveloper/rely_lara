@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row pt-5">
    @if($post)
    <div class="col-8 pl-3 w-100">
        <a href="{{'/p/'.$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"/></a>
    </div>
    <div class="col-3 pl-3">
    <h3>{{$post->user->username}}</h3>
    <p>{{$post->caption}}</p>
    </div>
    @endif
    </div>
</div>
@endsection
