@extends('layouts.master2')
@section('title','Logged In')
@section('content')

<link rel="shortcut icon"  href="{{ url('title/drop.jpg') }}">

<title>Search</title>
@section('content')
<div><h3>Help Line: 01521417977</h3> </div>

<br>
<br>
<div class="col-md-10">

    <form action="/badhan-result" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input style="height: 40px;" type="text" class="form-control" name="s"
                   placeholder="Blood Unit ">
            <input type="text" class="form-control" name="city" placeholder="Search in Your city">
            <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span><i class="fa fa-search"></i></span>
					</button>
				</span>
        </div>
    </form>
</div>
</div>
    <div class="container">
        <div class="card-block" >
        @if(isset($details))
            <p>Badhan Donors from <b> {{ $query }} </b> are :<p>

                <div class="row">
                    @foreach($details as $forms)

                        <div class="col-md-4">
                            <div class="card table-borderer mb-3" style="max-width: 20rem;">
                                <div class="card-header" style="background:#0096CD;text-align:center;font-family:'Merriweather', serif;color:rgb(255,255,255);font-size: 24px;font-weight: bolder">{{$forms->fullName}}</div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <div><img  src="{{url('upload/'.$forms->image)}}" style="height: 150px;width: 170px;margin-left: 63px;margin-bottom: 10px;margin-top: 10px;border-radius: 48%"></div>
                                        <div class=" " style="font-weight: bold;text-align:center;background:rgb(244,243,243);font-size: 24px; color:#00695C ">{{$forms->bloodGroup}}
                                        </div>
                                        @if($forms->status !='Available')
                                            <div class="" style=" font-size:22px;background:rgb(244,243,243);text-align:center; font-family:Helvetica;color:rgb(228,42,32);font-weight: bolder;"
                                            >{{$forms->status}}
                                            </div>
                                        @else
                                            <div class="" style=" font-size: 22px;font-family: 'Sky Text', sans-serif; background:rgb(244,243,243);text-align:center; color:forestgreen;font-weight: bolder;"
                                            >{{$forms->status}}
                                            </div>
                                        @endif

                                        <div  class=""style="text-align:center;background:rgb(244,243,243) ;color:rgb(53, 59, 72);font-size: 20px;font-weight: bold; font-family: 'Philosopher', sans-serif" >{{$forms->bloodUnitCity}}
                                        </div>
                                        <div  style="text-align: center;background:rgb(244,243,243);font-weight: bolder;"> <a href="{{route('donor_profile',[$forms->donorId])}}" class="btn" style="text-align:center;font-weight: bolder;font-family:'bree Serif',Serif; font-size:18px;color: black">Details</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            @elseif(isset($message))
            <p>{{ $message }}</p>
        @endif
    </div>


</div>




















@endsection
@section('script')

@endsection
