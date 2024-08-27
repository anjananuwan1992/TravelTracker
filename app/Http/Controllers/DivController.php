<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Business;
use App\Models\package;
use App\Models\Admin;
use App\Models\Attraction;
use App\Models\Tour;
use Session;
use DB;

class DivController extends Controller
{   
    public function create(Request $request) {
      if (Session::has('loginId')) {
        $amount = $request->input('amount');
        $users = User::all();
        $businesses = Business::all();
        $packages = package::all();
        $attractions = Attraction::all();
         if($amount >= 1 && $amount <= 5){
            return view('Plan', ['amount' => $amount], compact('users', 'businesses', 'packages', 'attractions'));
         }
         if ($amount == "NO"){
            return back()->withErrors(['amount' => 'Enter Dates After Today']);
         }
         else{
            return back()->withErrors(['amount' => 'Enter Valid Dates']);
         }
        
      } else {
         return back()->withErrors(['amount' => 'Please Logging first']);;
      }
        
    }

    public function planaria(){
        

    }
}
