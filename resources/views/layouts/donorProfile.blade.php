@extends('layouts.master2')
@section('title','Profile')
@section('content')


    <div class="container" style="margin-top: 2px;">
        <div class="row">

                <div class="col-md-12" >
                    <div class="card table-borderer mb-3" style="width: 960px;margin-left: 60px;">
                        <div class="card-header" style="background:#0096CD;text-align:center;color:rgb(255,255,255);font-size: 24px;font-family: 'Sky Text', sans-serif;font-weight: bolder">{{$form->fullName}}</div>
                        <div class="card-body">
                            <div class="list-group">
                                <div><img  src="{{url('upload/'.$form->image)}}" style="height: 250px;width: 300px;margin-left: 360px;margin-bottom: 10px;margin-top: 10px;border-radius: 55%"></div>
                                <div class=" " style="font-weight: bold;text-align:center;background:rgb(244,243,243); font-family:'Sky Text', sans-serif;font-size: 28px; color:#00695C ">{{$form->bloodGroup}}
                                </div>
                                @if($form->status !='Available')
                                    <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center; color:rgb(228,42,32);font-weight: bolder;"
                                    >{{$form->status}}
                                    </div>
                                @else
                                    <div class="" style=" font-size: 22px; background:rgb(244,243,243);text-align:center; color:forestgreen;font-weight: bolder;"
                                    >{{$form->status}}
                                    </div>

                                @endif

                                <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center; color:rgb(53,59,72;font-weight: bolder;"
                                >{{$form->phoneNumber}}
                                </div>
                                <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center; color:rgb(53,59,72);font-weight: bolder;"
                                >{{$form->city}}
                                </div>
                                
                                </div>
                                   <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center;10px;margin-bottom: argin color:rgb(53,59,72);font-weight: bolder;"
                            ><a style="margin-bottom: 10px;" href="{{route('mail',[$form->donorId])}}" class=" btn btn-success">Send Mail</a>
                            </div>

                                <table class="table table-condensed" style="text-align: center;">
                                    <tr>
                                        <th style="text-align: center">AGE</th>
                                        <th style="text-align: center">Weight</th>
                                        <th style="text-align: center">UNIT</th>
                                    </tr>
                                    <tr>
                                        <td style="margin-left:5px;font-family: 'Sky Text', sans-serif;font-size: 17px;">{{$form->age}}</td>
                                        <td style="font-family: 'Sky Text', sans-serif;font-size: 17px;">{{$form->weight}}</td>
                                        <td style="font-family: 'Sky Text', sans-serif;font-size: 17px;">{{$form->bloodUnit}}</td>
                                    </tr>

                                </table>





                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
















@endsection
@section('script')

@endsection



