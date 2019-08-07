@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img class="rounded-circle" src="https://instagram.fmaa1-1.fna.fbcdn.net/vp/d4e6e0aa7e84eb20623555ca685b8108/5DE56A3A/t51.2885-19/10448850_719759668083011_1824090024_a.jpg?_nc_ht=instagram.fmaa1-1.fna.fbcdn.net">
        </div>
        <div class="col-md-9">
        <div class="d-flex pt-5 justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>
        <a href="{{route('p.create')}}" class="">Add New Post</a>
        </div>
        <a href="/profile/{{$user->id}}/edit" class="">Edit Profile</a>
        <ul class="d-flex list-unstyled">
        <li class="pr-5"><a href=""><strong>{{$user->posts->count()}}</strong> posts</a></li>
        <li class="pr-5" ><a href=""><strong>206</strong> followers</a></li>
        <li class="pr-5"><a  href=""><strong>441</strong> following</a></li>
        </ul>
        <div><h4 >{{$user->profile->title}} </h4><span>{{$user->profile->description}}</span> <br>
        <a href="{{$user->profile->url ?? '#'}}" >{{ $user->profile->url ?? 'Not Available'}}</a> </div>
        </div>
    </div>

    <div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-md-4 pl-3 mb-3">
        <a href="{{'/p/'.$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"/></a>
    </div>
    @endforeach
    </div>
</div>
@endsection
