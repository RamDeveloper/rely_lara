@extends('layouts.frontend')

@section('content')
<div class="container pt-10">
    @if($posts)
    @foreach($posts as $key=> $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="{{'/p/'.$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"/></a>
        </div>
    </div>

    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <p><span class="font-weight-bold text-dark"><a href="/profile/{{$post->user->id}}"><span class=" text-dark">{{$post->user->username}}</span></a></span> 
             {{$post->caption}}</p>
        </div>
    </div>
    @endforeach

    <div class="row">
     <div class="col-12 d-flex justify-content-center">
        {{$posts->links()}}
     </div>
    </div>
    @endif
</div>
@endsection
