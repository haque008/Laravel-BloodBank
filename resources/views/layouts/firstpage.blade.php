<!DOCTYPE html>
<html lang="en">
<head>
  <title>BloodBank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}"
  <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('https://bootswatch.com/4/united/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/custom.css') }}">

</head>
<body style="background-image: url('assets/image/background.jpg'); background-size: 100%;">
<nav class="navbar navbar-expand-lg navbar-dark bg-link  " style="color:#F1F2F1; height: 60px;width: 100%;font-weight:lighter;font-size: 14px;">
  <a style="font-size: 30px; font-weight: bold;" class="navbar-brand" href="#">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01" style="margin-top: 25px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="padding-left: 45px; font-size: 16px;" class="nav-link" href="{{route('request-blood')}}">Request Blood <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a  style="padding-left: 45px; font-size: 16px; color: #F1F2F1;" class="nav-link" href="#">Serach Donor</a>
      </li>

      <li class="nav-item">
        <a style="padding-left: 45px; font-size: 16px;color: #F1F2F1;" class="nav-link" href="#">Health Tips</a>
      </li>
      <li class="nav-item">
        <a style="padding-left: 45px; font-size: 16px;color: #F1F2F1;" class="nav-link" href="{{route('requestList')}}">Blood Request</a>
      </li>  <li class="nav-item">
        <a style="padding-left: 45px; font-size: 16px;color: #F1F2F1;" class="nav-link" href="{{route('donor')}}">Donors</a>
      </li>
    </ul>
</nav>
<br>
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li> 
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <img src="{{url('assets/image/4.jpg')}}" style="width:100%; height:340px;">
        </div> 

      <div class="item"> 
         <img src="{{url('assets/image/2.jpg')}}" style="width:100%; height:340px;">
      </div>
    
      <div class="item">
        <img src="{{url('assets/image/3.jpg')}}" style="width:100%; height:340px;">
      </div>

      <div class="item">
        <img src="{{url('assets/image/1.jpg')}}" style="width:100%; height:340px;">
      </div>

    </div>
  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  

  <div style=" margin-top: 40px; margin-left: 300px; ">
  <button type="button" class="btn btn-outline-success" style="height: 40px; width: 140px; font-size: 20px; font-family: verdana; text-align: center;" ><a style="color: #F1F2F1; text-decoration: none;" href="{{route('register')}}">Sign Up</a></button>
  <button type="button" class="btn btn-outline-success" style="height: 40px; width: 140px; font-size: 20px; font-family: verdana; text-align: center; margin-left: 10px;"><a style="color: #F1F2F1; text-decoration: none;" href="{{ route('login') }}">Login</a></button></div>
</div>
 <!-- <script src="{{url('assets/jquery.min.js')}}"></script>
 <script src="{{url('assets/bootstrap.min.js')}}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
 