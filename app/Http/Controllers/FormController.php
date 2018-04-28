<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreForm;
use Illuminate\Http\Request;
use App\Donor;
use Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$form=Donor::all($id);
        $form = DB::table('donors')->Paginate(2);


        return view('layouts.alldonor', compact('form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donorform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForm $request)
    {

        $form = new Donor;
        $form->fullName = $request->input('fullName');
        $form->bloodGroup = $request->input('bloodGroup');
        $form->donorId = Auth::user()->id;
        $form->donorEmail = Auth::user()->email;
        $form->age = $request->input('age');
        $form->gender = $request->input('gender');
        $form->weight = $request->input('weight');
        $form->phoneNumber =$request->input('phoneNumber');
        $form->address = $request->input('address');
        $form->donatingDate = $request->input('donatingDate');
        $form->status = $request->input('status');
        $form->upazila = $request->input('upazila');
        $form->city = $request->input('city');
        $form->bloodUnit = $request->input('bloodUnit');
        $form->bloodUnitSection = $request->input('bloodUnitSection');
        $form->bloodUnitCity = $request->input('bloodUnitCity');

        if($request->file('image')){

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $token=sha1(time());
            $prefix='donor';
            $name=$prefix.'_'.$token.'.'.$ext;
            $path='upload';
            $file->move($path,$name);
            $image=$name;
        }
        else
            $image='donor.jpg';
        $form->image =$image;


        $form->save();
      return redirect('form');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Donor::where('donorId', $id)->first();

        return view('layouts.donorDetail', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Donor::where('donorId', $id)->first();

        return view('layouts.editDonorForm', compact('form'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $form = Donor::where('donorId', $id)->get();
//
//        $form->fullName = $request->input('fullName');
//        $form->bloodGroup = $request->input('bloodGroup');
//        $form->age = $request->input('age');
//        $form->gender = $request->input('gender');
//        $form->donorId = Auth::user()->id;
//        $form->donorEmail = Auth::user()->email;
//        $form->weight = $request->input('weight');
//        $form->phoneNumber = $request->input('phoneNumber');
//        $form->address = $request->input('address');
//        $form->donatingDate = $request->input('donatingDate');
//        $form->status = $request->input('status');
//        $form->upazila = $request->input('upazila');
//        $form->city = $request->input('city');
//        $form->BloodUnit = $request->input('bloodUnit');
//        $form->BloodUnitSection = $request->input('bloodUnitSection');
//        $form->BloodUnitCity = $request->input('bloodUnitCity');
//


        $data = $request->all();
        $donor = Donor::where('donorId', $id)->first();

        $donor->fullName = $data['fullName'];
        $donor->bloodGroup = $data['bloodGroup'];
        $donor->age = $data['age'];
        $donor->gender = $data['gender'];
        $donor->weight = $data['weight'];
        $donor->phoneNumber = $data['phoneNumber'];
        $donor->address = $data['address'];
        $donor->donatingDate = $data['donatingDate'];
        $donor->status = $data['status'];
        $donor->upazila = $data['upazila'];
        $donor->city = $data['city'];
        $donor->bloodUnit = $data['bloodUnit'];
        $donor->bloodUnitSection = $data['bloodUnitSection'];
        $donor->bloodUnitCity = $data['bloodUnitCity'];
        if($request->file('image')){

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $token=sha1(time());
            $prefix='donor';
            $name=$prefix.'_'.$token.'.'.$ext;
            $path='upload';
            $file->move($path,$name);
            $image=$name;
        }
        else
            $image=$donor->image;




        if ($donor->update()) {
            return redirect()
                ->route('form.index');
        } else {
            return redirect()
                ->route('form.edit');

        }

    }
}