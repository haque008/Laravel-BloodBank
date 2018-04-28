@extends('layouts.master2')
@section('title','Donor Form')
@section('content')

    <div class="card" style= font-weight:bolder;">
        <div style="text-align: center;" class="card-header">
            <strong>Donor</strong> <strong>Information</strong>
        </div>
        <div class="card-block">
            <form enctype="multipart/form-data"; action="{{route('form.update',['id'=> Auth::user()->id])}}"  method="post" class="form-horizontal ">
                {{ csrf_field() }}


                {{ method_field('PATCH') }}
                <div class="form-group row">
                    <label class="col-md-3 form-control-label"  >Name</label>
                    <div class="col-md-9">
                        <input type="text"  name="fullName" class="form-control"  value="{{$form->fullName}}">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Blood Group</label>
                    <div class="col-md-9">
                        <select id="select" name="bloodGroup" class="form-control" size="1">
                            <option value="A+" {{ $form->bloodGroup == 'A+' ? 'selected' : '' }}>A+</option>
                            <option value="A-" {{ $form->bloodGroup == 'A-' ? 'selected' : '' }}>A-</option>
                            <option value="AB+" {{ $form->bloodGroup == 'AB+' ? 'selected' : ''}}>AB+</option>
                            <option value="AB-" {{ $form->bloodGroup == 'AB-' ? 'selected' : ''}}>AB-</option>
                            <option value="B+" {{ $form->bloodGroup == 'B+' ? 'selected' : '' }}>B+</option>
                            <option value="B-" {{ $form->bloodGroup == 'B-' ? 'selected' : '' }}>B-</option>
                            <option value="O+" {{ $form->bloodGroup == 'O+' ? 'selected' : '' }}>O+</option>
                            <option value="O-" {{ $form->bloodGroup == 'O-' ? 'selected' : '' }}>O-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Age</label>
                    <div class="col-md-9">
                        <input type="number"  name="age" value="{{$form->age}}" class="form-control" placeholder="Enter Your Age">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Gender</label>
                    <div class="col-md-9">
                        <select id="select" name="gender"value="{{$form->gender}}" class="form-control" size="1">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Weight</label>
                    <div class="col-md-9">
                        <input type="number"  name="weight" value="{{$form->weight}}" class="form-control" placeholder="Enter Your Weight">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Phone Number</label>
                    <div class="col-md-9">
                        <input type="number"  name="phoneNumber" value="{{$form->phoneNumber}}" class="form-control" placeholder="Enter Your PhoneNumber">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="textarea-input">Address</label>
                    <div class="col-md-9">
                        <textarea id="textarea-input" name="address"  rows="9" class="form-control" placeholder="Address..">{{$form->address}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Status</label>
                    <div class="col-md-9">
                        <select id="select" name="status" class="form-control" size="1">
                            <option value="Available"{{ $form->status == 'Available' ? 'selected' : '' }}>Available</option>
                            <option value="Unavailable"{{ $form->status== 'Unavailabe' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Donating Date</label>
                    <div class="col-md-9">
                        <input type="date"  name="donatingDate" value="{{$form->donatingDate}}"  class="form-control">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >City</label>
                    <div class="col-md-9">
                        <input type="text"  name="city" value="{{$form->city}}" class="form-control" placeholder="">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Upazila</label>
                    <div class="col-md-9">
                        <input type="text"  name="upazila" value="{{$form->upazila}}" class="form-control" placeholder="">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Blood Unit</label>
                    <div class="col-md-9">
                        <select id="select" name="bloodUnit" class="form-control" size="1">
                            <option value="Badhan"{{ $form->bloodUnit == 'Badhan' ? 'selected' : '' }}>Badhan</option>
                            <option value="Sondhani"{{ $form->bloodUnit == 'Sondhani' ? 'selected' : '' }}>Sondhani</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Blood Unit Section</label>
                    <div class="col-md-9">
                        <input type="text"  name="bloodUnitSection"  value="{{$form->bloodUnitSection}}" class="form-control" placeholder="">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Blood Unit City</label>
                    <div class="col-md-9">
                    <input type="text"  name="bloodUnitCity"  value="{{$form->bloodUnitCity}}" class="form-control" placeholder="">
                    <span class="help-block"></span>
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Image</label>
                    <div class="col-md-9">
                        <input type="file"  name="image"  value="" class="form-control" placeholder="Change Image">
                        <span class="help-block"></span>
                        <span><img style="height: 120px;width: 80px;" src="{{url('upload/'.$form->image)}}"> </span>
                    </div>
                </div>

                    <div class="col-md-9">
                    <input  style="margin-left: 250px;" value="update" type="submit" class="btn btn-sm btn-success">
                    <button type="reset" class="btn btn-sm btn-danger"> Reset</button>
                </div>
            </form>
        </div>

    </div>

@endsection
@section('script')

@endsection