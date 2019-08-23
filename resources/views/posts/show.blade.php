@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row pt-5">
    @if($post)
    <div class="col-8 pl-3 w-100">
        <a href="{{'/p/'.$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"/></a>
    </div>
    <div class="col-3 pl-3">
    <div class="d-flex align-items-center">
        <div class="p-3">
            <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width:40px;">
        </div>
        <div>
            <div class="font-weight-bold font-weight-bold d-flex align-items-center">
            <a href="/profile/{{$post->user->id}}"><span class=" text-dark">{{$post->user->username}}</span>
            </a>
            <a href="#" class="p-l7"><span class=" text-dark">
            <followbutton user-id="{{$post->user->id}}" follows="{{$follows}}"></followbutton>
            </span>
            </a>
            </div>
        </div>
    </div>
    <hr>
    <p><span class="font-weight-bold text-dark"><a href="/profile/{{$post->user->id}}"><span class=" text-dark">{{$post->user->username}}</span></a></span> : {{$post->caption}}</p>
    </div>
    @endif
    </div>
</div>
@endsection
