<?php

namespace App\Http\Controllers;
use App\Donor;
use App\Seeker;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function donorList()
    {
      $donor=Donor::all();
      return view('layouts.publicDonorList',compact('donor'));
    }

    public function requestList()
    {
        $seeker=Seeker::all();
        return view('layouts.requestedBloodList',compact('seeker'));
    }

    public function requestBlood()
    {
        return view('layouts.bloodrequest');
    }


    public function store(Request $request)
    {
        $seeker=new Seeker;
        $seeker->seekerName = $request->input('seekerName');
        $seeker->patientName = $request->input('patientName');
        $seeker->hospitalName= $request->input('hospitalName');
        $seeker->bloodGroup = $request->input('bloodGroup');
        $seeker->city = $request->input('city');
        $seeker->address =$request->input('address');
        $seeker->note = $request->input('note');
        $seeker->phone= $request->input('phone');
        $seeker->requiredDate = $request->input('requiredDate');
        $seeker->save();
        return redirect('requestList');

    }



}

