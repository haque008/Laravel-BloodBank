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
                
                     

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')


    <script>
        swal("Good job!", "Now complete Your Profile, Go To Info Section", "success",{

            timer:3000,
            buttons:false,
        });
    </script>

@endsection
