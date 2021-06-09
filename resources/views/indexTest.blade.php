@extends('layout/main')

@section('container')
<div class="content">
        <!--home bg---------------->
        <div class="home-background">
            <div class="main-text" style="margin-top:-230pt">
                <h1 class="text-center font-weight-bold headline-home">We Provide The Best Health<br>Services For You</h1>
                <p class="text-center desc-home">Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit. Magna ut euismod</p>
                <!--btn------->
                <button type="button" class="btn btn-success mx-auto d-block login-btn" style="border-radius: 20pt; margin-top:15pt">Reservation</button>
            </div>
        </div>
        <div style="margin-top:-168pt">
            <h2 class="text-center titlehome">Powered By</h2>
            <p class="text-center text-muted desc-powered">1000+ Trusted Medical Organization Throughout Indonesia</p>
            <img class="rounded mx-auto d-block poweredlogo" src="../img/powered logo.png"  alt="">
        </div>
        
        <!--text---------------->
    </div>
  @endsection