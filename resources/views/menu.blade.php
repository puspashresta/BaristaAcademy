@extends('base.master')
@section('content')
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/img/menu3.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/serviceslider.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/menu3.jpg);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="col"></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 align="center"><b><u>Menu</u></b><h1></div>

            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                @foreach($menuj as $mnu)
                <div class="col-md-6">
                    <a href="#"><img class="img-fluid" src="{{ asset('storage/services/'.$mnu->image) }}" width="400px" height="300px" alt=""></a>
                    <h2>{{$mnu->title}}</h2>
                    <a href="menuCard">View Menu</a><br/>
                </div>
                @endforeach

                <!-- <div class="col-md-6"></div> -->
            </div>
        </div>
    </div>
   @endsection