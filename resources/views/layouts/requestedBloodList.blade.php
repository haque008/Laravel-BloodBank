@extends('layouts.master')
@section('title','All User')
@section('content')


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" style="font-size:24px;">
                <i class="fa fa-align-justify" style="font-size: 24px;"></i> Blood Request
            </div>
            <div class="card-block" >
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Seeker Name</th>
                        <th>Patient Name</th>
                        <th>Hospital Name</th>
                        <th>Required Blood Group</th>
                        <th>Required Date</th>
                        <th> Address</th>

                        <th>City</th>
                        <th>Phone Number</th>
                        <th>Note</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($seeker as $forms)
                        <tr>

                            <td>{{$forms->seekerName}}</td>

                            <td>{{$forms->patientName}}</td>
                            <td>{{$forms->hospitalName}}</td>
                            <td>{{$forms->bloodGroup}}</td>
                            <td>{{$forms->requiredDate}}</td>
                            <td>{{$forms->address}}</td>
                            <td>{{$forms->city}}</td>
                            <td>{{$forms->phone}}</td>
                            <td>{{$forms->note}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>














@endsection
@section('script')

@endsection