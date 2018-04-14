@extends('layouts.master2')
@section('title','All User')
@section('content')





    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <div class="container">
        <div class="row">

            <div class="col-md-12 ">

                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:rgb(53, 59, 72) ">  <h4  style="color: #00b1b1;font-size: 24px;">My Profile</h4></div>
                    <div class="panel-body" style="background-color:rgb(53, 59, 72) ">

                        <div class="box box-info">

                            <div class="box-body">
                                <div class="col-sm-4">
                                    <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <div style="color:#999;" > change profile image</div>

                                    </div>

                                    <br>
                                </div>

                                <div class="col-sm-6">
                                    <span><p style="font-size: 38px; color: #f1f2f7">{{$form->fullName}}</p></span>
                                    <span><p style="font-size: 38px; color: rgb(192, 57, 43);">{{$form->bloodGroup}}</p></span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">

                                <div class="col-sm-5 col-xs-6 tital " style="color: #f1f2f1; font-size: 18px;" >Gender</div><div class="col-sm-7"style="color: #f1f2f7; font-size: 18px;" > {{$form->gender}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital "  style="color: #f1f2f1; font-size: 18px;" >Age</div><div class="col-sm-7"  style="color: #f1f2f7; font-size: 18px;" > {{$form->age}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " style="color: #f1f2f1; font-size: 18px;"  >Weight</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->weight}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital "  style="color: #f1f2f1; font-size: 18px;" >Address</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->address}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #f1f2f1; font-size: 18px;" >City</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->city}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " style="color: #f1f2f1; font-size: 18px;"  >Status</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->status}}</div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>
                                    <div class="col-sm-5 col-xs-6 tital " style="color: #f1f2f1; font-size: 18px;"  >Blood Unit</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->bloodUnit}}</div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>
                                    <div class="col-sm-5 col-xs-6 tital " style="color: #f1f2f1; font-size: 18px;"  >Blood Unit Section</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->bloodUnitSection}}</div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>
                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #f1f2f1; font-size: 18px;" >Blood Unit City</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{$form->bloodUnitCity}}</div>
                                     <div class="clearfix"></div>
                                    <div class="bot-border"></div>
                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #f1f2f1; font-size: 18px;" >Email</div><div class="col-sm-7" style="color: #f1f2f7; font-size: 18px;" >{{Auth::user()->email}}</div>
                                <!-- /.box-body -->
                            </div>

                            <!-- /.box -->

                        </div>


                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $('#profile-image1').on('click', function() {
                        $('#profile-image-upload').click();
                    });
                });
            </script>









        </div>
    </div>





























@endsection
@section('script')

@endsection



