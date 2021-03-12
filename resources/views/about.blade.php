@extends('base.master')
@section('content')
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/img/slider1.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/serviceslider.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/slider2.jpg);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    @foreach($abouts as $abt)
                    <div class="intro">
                        <h1 class="text-center">{{$abt->title}}</h1>
                        <p class="text-center"><span class="by"></span> <a href="#"></a><span class="date"> {{$abt->founded_date}}</span></p><img class="img-fluid" src="{{asset('storage/images/'.$abt->image)}}" width="440px" height="auto"></div>
                    <div class="text">
                        <p align="center"> {{$abt->description}}</p>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Team :</h2>
                <p class="text-center">Barista Nepal, one of the leading business academy in Kathmandu as it sets best image of hard work and entrepreneurship in early days of people.</p>
            </div>
            <div class="row people">
                @foreach($teamss as $tms)
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="{{ asset('storage/teams/'.$tms->image) }}" width="340px" height="350px">
                        <h3 class="name"align="center">{{$tms->name}}</h3>
                        <p class="title" align="center">{{$tms->position}}</p>
                        <p class="description" align="center">{{$tms->description}} </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
               @endforeach
                </div>
            </div>
        </div>
    </div><iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11"></iframe>
    @endsection