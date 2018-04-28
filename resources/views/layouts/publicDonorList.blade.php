@extends('layouts.master')
@section('title','Donorlist')
@section('content')



    <div class="container" style="margin-top: 40px;">
        <div class="row">
      @foreach($donor as $forms)

            <div class="col-md-3">
                <div class="card table-borderer mb-3" style="max-width: 20rem;">
                    <div class="card-header" style="background:#0096CD;text-align:center;color:rgb(255,255,255);font-size: 24px;font-weight: bolder">{{$forms->fullName}}</div>
                    <div class="card-body">
                        <div class="list-group">
                            <div><img  src="{{url('upload/'.$forms->image)}}" style="height: 150px;width: 170px;margin-left: 40px;margin-bottom: 10px;margin-top: 10px;border-radius: 48%"></div>
                            <div class=" " style="font-weight: bold;text-align:center;background:rgb(244,243,243);font-size: 24px; color:#00695C ">{{$forms->bloodGroup}}
                            </div>
                            @if($forms->status !='Available')
                            <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center; color:rgb(228,42,32);font-weight: bolder;"
                            >{{$forms->status}}
                            </div>
                            @else
                                <div class="" style=" font-size: 22px; background:rgb(244,243,243);text-align:center; color:forestgreen;font-weight: bolder;"
                                >{{$forms->status}}
                                </div>
                            @endif

                            <div  class=""style="text-align:center;background:rgb(244,243,243) ;color:rgb(53, 59, 72);font-size: 20px;font-weight: bold" >{{$forms->city}}
                            </div>
                            <div  style="text-align: center;background:rgb(244,243,243);font-weight: bolder;"> <a href="{{route('donor_profile',[$forms->donorId])}}" class="btn" style="text-align:center;font-weight: bolder; font-size:18px;color: black">Details</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    {{$donor->links()}}








@endsection
@section('script')

@endsection

