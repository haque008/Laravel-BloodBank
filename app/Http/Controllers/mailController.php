<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Donor;

class mailController extends Controller
{
    public function index($id){
        $form = Donor::where('donorId',$id)->first();


        return view('layouts.emailForm',compact('form'));

    }

    public function send(Request $request){


    $request->validate([
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required'



    ]);
      $data=[

        'email'=>$request->email,
          'subject'=>$request->subject,
          'bodyMessage'=>$request->message,
      ];

      Mail::send('mail.mail',$data,function ($message)use ($data){

          $message->from('haque008@gmail.com','testMail');
          $message->to($data['email']);
          $message->subject($data['subject']);



      });
      return redirect()->back();

    }



}
