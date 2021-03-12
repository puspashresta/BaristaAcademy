  @extends('base.master')
  @section('content')
   
    <div class="contact-clean"></div>
    <div class="contact-clean">
        <form method="post" action="/send" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">Add Member</h2>
            <div class="form-group"><input class="form-control" type="file" name="image" placeholder="Image of Member">
          
            </div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="position" name="position" placeholder="Designation"></div>
            <div class="form-group"><textarea class="form-control" rows="8" name="description" placeholder="Description"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="team_submit">send </button></div>
        </form>
    </div><iframe allowfullscreen="" frameborder="2" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11"></iframe>
    <div></div>
    <div></div>
 @endsection