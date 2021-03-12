@extends('base.master')
@section('content')
    <div class="container">
        <div>
            <form action="new_register" method="post"  enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Name </strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="name" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Image</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="file" name="image" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Gender </strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><select class="form-control" name="gender" style="font-family:Roboto, sans-serif;"><optgroup label="This is a group"><option value="12" selected="">Male</option><option value="13">Female</option><option value="14">Others</option></optgroup></select></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Birth Date</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="date" name="birthDate" style="font-family:Roboto, sans-serif;"></div>
                        </div>
                        
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Mother's Name</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1" style="font-family:Roboto, sans-serif;"><input class="form-control" type="text"  name='mothersName' placeholder="Name" style="margin-left:0px;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px; "><strong>Father's Name</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" name='fathersName' type="text" placeholder="Name" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Current Address</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><textarea class="form-control" name="currentAddress" style="font-family:Roboto, sans-serif;"></textarea></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Permenent Address</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><textarea class="form-control" name="permanentAddress" style="font-family:Roboto, sans-serif;"></textarea></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Contact Number</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="contact" name="contact" style="font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Course Name </strong></p>
                            </div>

                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="courseName" placeholder="courseName" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                            
                        </div>
                            
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" type="reset" style="font-family:Roboto, sans-serif;">Clear </button><button class="btn btn-light btn-lg" type="submit" style="margin-left:16px;">Submit </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection