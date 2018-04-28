@extends('layouts.master')
@section('title','All User')
@section('content')


<form action="{{route('sendmail')}}" method="post">
  {{csrf_field()}}
  <div class="row">
    <div class="col-lg-8">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" value="{{$form->donorEmail}}"  placeholder="Enter email">

  <div class="form-group">
    <label for="text">subject</label>
    <input type="text" class="form-control" name="subject" placeholder="subject">
  </div>
  <div class="form-group">
    <label for="textarea">Your Message</label>
    <textarea  class="form-control" name="message" placeholder="message"></textarea>
  </div>
    <div>
  <button type="submit" class="btn btn-danger" >Submit</button>
  </div>
  </div>
  </div>
  </div>
 </form>




@endsection
@section('script')

@endsection