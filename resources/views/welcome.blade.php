@extends('layouts.frontend')
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
.welcome-home{
  background-image: url("/img/home_bg.jpg");
  filter: blur(8px);
  -webkit-filter: blur(8px);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.welcome-text{
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  color:#000;
  font-size:22px;
  text-align: center;
}
.welcome-text a{
    font-size:22px;
    color:#000;
    text-transform:Capitalize;
}
</style>

@section('content')
    <div class="welcome-home"></div>
    <div class="">
        <div class="content welcome-text">
            <div class="title m-b-md">
              RelyLara
            </div>

            <div class="links">
                <p>Just another clone of Instagram </p>
                ~ <a href="https://ramdeveloper.github.io">Ramkumar</a>
            </div>
        </div>
    </div>
@endsection
