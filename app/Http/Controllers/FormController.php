<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Donor;
use Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form=Donor::all();



        return view('layouts.newdashboard',compact('form'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form=new Donor;
        $form->fullName = $request->input('fullName');
        $form->bloodGroup = $request->input('bloodGroup');
        $form->age = $request->input('age');
        $form->gender = $request->input('gender');
        $form->donorId = Auth::user()->id;
        $form->donorEmail = Auth::user()->email;
        $form->weight = $request->input('weight');
        $form->phoneNumber = $request->input('phoneNumber');
        $form->address = $request->input('address');
        $form->donatingDate = $request->input('donatingDate');
        $form->status = $request->input('status');
        $form->upazila = $request->input('upazila');
        $form->city = $request->input('city');
        $form->save();
        return redirect('form');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Donor::where('donorId',$id)->get();

        return view('layouts.mydashboard',compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
