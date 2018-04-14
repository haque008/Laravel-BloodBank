@extends('layouts.master')
@section('title','Blood Request')
@section('content')

    <div class="card" style= font-weight:bolder;">
        <div style="text-align: center;" class="card-header">
            <strong>Donor</strong> <strong>Information</strong>
        </div>
        <div class="card-block">
            <form action="{{route('blood-request')}}" method="post" class="form-horizontal ">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Name</label>
                    <div class="col-md-9">
                        <input type="text"  name="seekerName" class="form-control" placeholder="Enter Your name">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="select">Blood Group</label>
                    <div class="col-md-9">
                        <select id="select" name="bloodGroup" class="form-control" size="1">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Hospital Name</label>
                    <div class="col-md-9">
                        <input type="text"  name="hospitalName" class="form-control" placeholder="Enter Your Age">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Patient Name</label>
                    <div class="col-md-9">
                        <input type="text"  name="patientName" class="form-control" placeholder="Enter Patient Name">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >City</label>
                    <div class="col-md-9">
                        <input type="text"  name="city" class="form-control" placeholder="Enter Your City">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="textarea-input">Address</label>
                    <div class="col-md-9">
                        <textarea id="textarea-input" name="address" rows="9" class="form-control" placeholder="Address.."></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Phone Number</label>
                    <div class="col-md-9">
                        <input type="text"  name="phone" class="form-control" placeholder="Enter Your PhoneNumber">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="textarea-input">Note (Optional)</label>
                    <div class="col-md-9">
                        <textarea id="textarea-input" name="note" rows="9" class="form-control" placeholder="Address.."></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" >Required Date</label>
                    <div class="col-md-9">
                        <input type="date"  name="requiredDate" class="form-control" placeholder="">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="card-footer">
                    <button  style="margin-left: 250px;" type="submit" class="btn btn-sm btn-success"> Submit</button>
                    <button type="reset" class="btn btn-sm btn-danger"> Reset</button>
                </div>
            </form>
        </div>

    </div>

@endsection
@section('script')

@endsection