 @extends('base.master')
 @section('content')
   
    <div class="contact-clean"></div>
    <div class="contact-clean">
        <form action="/submit" method="POST" enctype="multipart/form-data">

            @csrf
            <h2 class="text-center">Add Course</h2>
             <div class="form-group"><input class="form-control" type="file" name="image"></div>
             <div class="form-group"><input class="form-control" type="text" name="coursename" placeholder="course Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="text" name="ctype" placeholder="course type"></div>
             <div class="form-group"><input class="form-control" type="text" name="price" placeholder="Cost"></div>

            <div class="form-group"><textarea class="form-control" rows="8" name="description" placeholder="Description"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" >Submit </button></div>
        </form>
    </div>
@endsection