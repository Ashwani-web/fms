<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustmorePannelController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth:customer');
   }
   public function index(){

    return view('custmore/custmore_pannel/dashboard');
   }

   public function listOfClass(){

      return view('custmore/custmore_pannel/listOfMyclass');
     }

   public function paymentDetail(){

      return view('custmore/custmore_pannel/payment');
      }
}
