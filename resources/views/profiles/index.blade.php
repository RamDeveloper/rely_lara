@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img class="rounded-circle w-100" src="{{$user->profile->profileImage()}}">
        </div>
        <div class="col-md-9">
        <div class="d-flex pt-5 justify-content-left align-items-baseline">
        <h1>{{$user->username}}</h1>
        <followbutton user-id="{{$user->id}}" follows="{{$follows}}"></followbutton>
        @can('update',$user->profile)
        <a href="{{route('p.create')}}" class="pl-5">Add New Post</a>
        @endcan
        </div>

        @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit" class="">Edit Profile</a>
        @endcan

        <ul class="d-flex list-unstyled">
        <li class="pr-5"><a href=""><strong>{{$postsCount}}</strong> posts</a></li>
        <li class="pr-5" ><a href=""><strong>{{$followersCount}}</strong> followers</a></li>
        <li class="pr-5"><a  href=""><strong>{{$followingsCount}}</strong> following</a></li>
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
