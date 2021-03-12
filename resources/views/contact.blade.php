  @extends('base.master')
  @section('content')
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/img/home1.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(assets/img/serviceslider.jpg);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="contact-clean"></div>
    <div class="contact-clean">
        <form method="POST" action="msg_submit">
            @csrf
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" rows="8" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Submit </button></div>
        </form>
    </div><iframe allowfullscreen="" frameborder="2" width="100%" height="400" src="https://www.google.com/maps/@27.7478492,85.3274842,11z"></iframe>
    <div></div>
    <div></div>
 @endsection