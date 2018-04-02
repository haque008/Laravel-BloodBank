@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 style="color: #f1f2f1;"> welcome <strong> <br>{{Auth::user()->firstName}}</strong> <strong>{{Auth::user()->lastName}} !!</strong> </h1>
                        <h3>You are now registered!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
