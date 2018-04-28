<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Input;
use App\Donor;

class SearchController extends Controller
{

    public function index(){
        return view('layouts.search');
    }
      public function badhan(){

        return view('layouts.badhan');

     }


    public function search(){

  $s=Input::get('s');
  $city=Input::get('city');
  if($s !="" || $city!=""){
      $form=Donor::where('bloodGroup','LIKE','%'.$s.'%')
      ->where('status','=','Available')
          ->where('city','like','%'.$city.'%')->get();

      if(count($form)>0)
      return view("layouts.search")->withDetails($form)->withQuery($s);

  }
   return view('layouts.search')->withMessage('No result found');


    }



    public function badhanSearch(){

  $s=Input::get('s');
   $city=Input::get('city');

  if($s !="" || $city!=""){
      $form=Donor::where('bloodUnitSection','like','%'.$s.'%')
        ->where('status','=','Available')
         ->where('bloodUnitCity','like','%'.$city.'%')->get();


      if(count($form)>0)
      return view("layouts.badhan")->withDetails($form)->withQuery($s);

  }
   return view('layouts.badhan')->withMessage('No result found');


    }
}
