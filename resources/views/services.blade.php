@extends('base.master')
@section('content')
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/img/serviceslider.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/serviceslide.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/homeslide.jpg);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 align="center"><b><u>Our Services</u></b><h1></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            @foreach($service as $serv)
            <div class="row">
                <div class="col-md-6">
                   <a href="#"><img class="img-fluid" src="{{ asset('storage/services/'.$serv->image) }}" width="450px" height="350px" alt=""></a>
               </div>
                
                <div class="col-md-6">
                    <h3>{{$serv->title}}</h3><br/>
                    <p>{{$serv->description}}</p><br/>
                    <a href="#"><button>Know More..</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   @endsection