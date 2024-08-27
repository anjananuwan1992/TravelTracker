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
use App\Models\Plan;
use Session;
use DB;

class travelerController extends Controller
{
    public function registertraveler(Request $request){
        
        $request->validate([
            'first_name'=>'required',
            'status'=>'required',
            'usertype'=>'required',
            'name'=>'required',
            'ID_no'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            'contact'=>'required',
            'password'=>'required|min:8|max:12'

        ]);

        $user = new User();
        $user->status = $request->status;
        $user->usertype = $request->usertype;
        $user->first_name = $request->first_name;
        $user->name = $request->name;
        $user->ID_no = $request->ID_no;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res){
            session()->put('registered_email', $request->email);
            return redirect('login')->with('success', 'Traveler registration Successfull, Please login');

        }else{
            return back()->with('fail', 'Something wrong');

        }


    }

    public function travelerdashboard(){
        
        
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $user = User::find($userId);
    
            if ($user) {
                $userEmail = $user->email;
                $plans = DB::table('plans')->where('email', $userEmail)->get();
                
            }
        } else {
           
            $plans = [];
        }

        $packages = DB::table('packages')->get();
        $attractions = DB::table('attractions')->get();
        $businesses = DB::table('businesses')->get();
        
        return view('travelerdashboard', compact('businesses', 'packages', 'attractions','plans'));
    }

    
    public function traveleroption(){
        
        
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $user = User::find($userId);
    
            if ($user) {
                $userEmail = $user->email;
                $plans = DB::table('plans')->where('email', $userEmail)->get();
                
            }
        } else {
           
            $plans = [];
        }

       
        
        return view('traveleroption', compact('plans'));
    }


    public function travellist($id){  
        $data = null;
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $user = User::find($userId);

            if ($user) {
                $userEmail = $user->email;
                
            }
            
            $packages = DB::table('packages')->get();
            $attractions = DB::table('attractions')->get();
            $businesses = DB::table('businesses')->get();
            $plan = DB::table('plans')->where('id', $id)->first(); 
            
            return view('travellist', compact('plan', 'businesses','attractions','packages'));
            
        }

    }
}
