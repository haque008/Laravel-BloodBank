@extends('layouts.master2')
@section('title','All User')
@section('content')





    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <div class="container">
        <div class="row">


            <div class="col-md-12 ">

                <div>
                    <div class="panel-heading" style="background-color:#d2dae2">  <h4  style="color: darkred;font-size: 34px;">Donor List</h4></div>
                    <div  class="panel-body" style="background-color:#d2dae2">
                            @foreach($form as $forms)
                            <div>

                                    <div class="col-md-8">
                                        <span><p style="font-size: 30px; color: #EA2027">{{$forms->fullName}}</p></span>
                                        <span><p style="font-size: 30px; color: rgb(192, 57, 43);">{{$forms->bloodGroup}}</p></span>
                                    </div>

                                    <hr style="margin:10px 0 2px 0;">

                                    <div class="col-sm-5 col-xs-6 tital " style="color: #2f3640; font-size: 18px;" >Gender</div><div class="col-sm-7"style="color: #2f3640; font-size: 18px;" > {{$forms->gender}}</div>



                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #2f3640; font-size: 18px;" >Age</div><div class="col-sm-7"  style="color:#2f3640; font-size: 18px;" > {{$forms->age}}</div>



                                    <div class="col-sm-5 col-xs-6 tital " style="color: #2f3640; font-size: 18px;"  >Weight</div><div class="col-sm-7" style="color: #2f3640; font-size: 18px;" >{{$forms->weight}}</div>




                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #2f3640; font-size: 18px;" >Address</div><div class="col-sm-7" style="color: #2f3640; font-size: 18px;" >{{$forms->address}}</div>

                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #2f3640; font-size: 18px;" >City</div><div class="col-sm-7" style="color: #2f3640; font-size: 18px;" >{{$forms->city}}</div>




                                    <div class="col-sm-5 col-xs-6 tital " style="color: #2f3640; font-size: 18px;"  >Status</div><div class="col-sm-7" style="color: #2f3640; font-size: 18px;" >{{$forms->status}}</div>

                                    <div class="col-sm-5 col-xs-6 tital " style="color: #2f3640; font-size: 18px;"  >Blood Unit</div><div class="col-sm-7" style="color:#2f3640; font-size: 18px;" >{{$forms->bloodUnit}}</div>


                                    <div class="col-sm-5 col-xs-6 tital " style="color: #2f3640; font-size: 18px;"  >Blood Unit Section</div><div class="col-sm-7" style="color:#2f3640; font-size: 18px;" >{{$forms->bloodUnitSection}}</div>


                                    <div class="col-sm-5 col-xs-6 tital "  style="color: #2f3640; font-size: 18px;" >Blood Unit City</div><div class="col-sm-7" style="color: #2f3640; font-size: 18px;" >{{$forms->bloodUnitCity}}</div>
                                <div class="clearfix" style="color: #00a67c"></div>




                            <!-- /.box-body -->
                            </div>
                        @endforeach

                            <!-- /.box -->

                        </div>


                    {{ $form->links() }}






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



