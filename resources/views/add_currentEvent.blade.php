@extends('base.master')
@section('content')
    <div class="container">
        <div>
            <form action="add_current" method="post"  enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Title </strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="title" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                      <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Image</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="file" name="image" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        
                        <div class="form-group"><textarea class="form-control" rows="10" name="description" placeholder="Description"></textarea></div>
                        </div>
                        <!-- <div class="form-group">
                            <label>Is Current Event:</label>
                         <br/>
                         <select name="type">
                             <option>True</option>
                             <option>False</option>
                         </select>   
                        </div> -->
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