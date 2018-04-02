<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function reg()
    {
        return view('layouts.register');
    }

//    public function form()
//    {
//        return view('donorform');
//    }

    public function requestBlood()
    {
        return view('layouts.bloodrequest');
    }


   public function store (Request $request)
  {
        $form=new Donor;
        $form->firstName->$request->input('firstName');
        $form->bloodGroup->$request->input('bloodGroup');
        $form->age->$request->input('age');
        $form->gender->$request->input('gender');
        $form->weight->$request->input('weight');
        $form->phoneNumber->$request->input('phoneNumber');
        $form->address->$request->input('address');
        $form->donatingDate->$request->input('donatingDate');
        $form->status->$request->input('status');
        $form->save();
        return redirect('/log');


    }



}