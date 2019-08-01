@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img class="rounded-circle" src="https://instagram.fmaa1-1.fna.fbcdn.net/vp/d4e6e0aa7e84eb20623555ca685b8108/5DE56A3A/t51.2885-19/10448850_719759668083011_1824090024_a.jpg?_nc_ht=instagram.fmaa1-1.fna.fbcdn.net">
        </div>
        <div class="col-md-9">
        <div class="d-flex pt-5">
        <h1>{{$user->username}}</h1>
        <a class="pt-2 pl-3" rel="nofollow" href="/accounts/login/?next=%2Fram.kumarz%2F&amp;source=follow"><button class="_0mzm- sqdOP  L3NKy       " type="button">Follow</button></a>
        </div>
        <ul class="d-flex list-unstyled">
        <li class="pr-5"><a href=""><strong>32</strong> posts</a></li>
        <li class="pr-5" ><a href=""><strong>206</strong> followers</a></li>
        <li class="pr-5"><a  href=""><strong>441</strong> following</a></li>
        </ul>
        <div><h4 >{{$user->name}} </h4><span>Techie 👨‍💻 | FZ🏍️ | Gryffindor🔥| Joker🃏 | TN-64 🏡</span> </div>
        </div>
    </div>

    <div class="row pt-5">
    <div class="col-md-4 pl-3">
        <img src="https://instagram.fmaa1-1.fna.fbcdn.net/vp/bd71cfcb73ab8d25a1afdaad415be0d5/5DC994B6/t51.2885-15/e15/10784820_532867060190635_1509292652_n.jpg?_nc_ht=instagram.fmaa1-1.fna.fbcdn.net" class="w-100"/>
    </div>
    <div class="col-md-4 pl-3">
        <img src="https://instagram.fmaa1-1.fna.fbcdn.net/vp/5c63d8ad21c3bcd8146bba675fa6a1a8/5DCFEE76/t51.2885-15/e15/s480x480/10665479_276532585877985_1386185377_n.jpg?_nc_ht=instagram.fmaa1-1.fna.fbcdn.net"class="w-100"/>
    </div>
    <div class="col-md-4 pl-3">
        <img src="https://instagram.fmaa1-1.fna.fbcdn.net/vp/47cd0c4d6020d16474de82b2920bb1a0/5DE48A5D/t51.2885-15/e15/s480x480/927723_279545588899646_282041407_n.jpg?_nc_ht=instagram.fmaa1-1.fna.fbcdn.net"class="w-100"/>
    </div>
    </div>
</div>
@endsection
