@extends('layouts.master')
@section('title','All User')
@section('content')


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" style="font-size:24px;">
                <i class="fa fa-align-justify" style="font-size: 24px;"></i> My Information
            </div>
            <div class="card-block" >
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Blood Group</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($form as $forms)
                    <tr>

                        <td>{{$forms->fullName}}</td>
                        <td>{{$forms->bloodGroup}}</td>
                        <td>{{$forms->gender}}</td>
                        <td>{{$forms->age}}</td>
                        <td>{{$forms->weight}}</td>
                        <td>{{$forms->address}}</td>
                        <td>{{$forms->city}}</td>
                        <td>{{$forms->status}}</td>
                        <td>
                            <a type="submit" class="btn btn-primary" href="{{ route('form.show',['id'=> Auth::user()->id])}}">Detail</a
                            >
                        </td>

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