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
                <div class="col-md-12"><h1 align="center"><b><u>Approaching Events</u></b><h1></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            @foreach($ebent as $ebnt)
            <div class="row">
                <div class="col-md-6">
                   <a href="#"><img class="img-fluid" src="{{ asset('storage/events/'.$ebnt->image) }}" width="325px" height="200px" alt=""></a>
               </div>
                
                <div class="col-md-6">
                    <h3>{{$ebnt->title}}</h3><br/>
                    <p>{{$ebnt->description}}</p><br/>
                    <a href="#"><button>Know More..</button></a>
                    <a href="registration">Register Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   @endsection