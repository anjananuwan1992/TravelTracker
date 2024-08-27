<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Business;
use App\Models\package;
use App\Models\Admin;
use App\Models\Attraction;
use Session;
use DB;




class adminController extends Controller
{
    
    public function activeuser(Request $request){
        

        $userId = $request->id; // Change 'package_id' to the actual identifier you use

        // Retrieve the existing package
        $user = User::find($userId);

        // Check if the package exists
        if ($user) {
            // Update the package properties with the new values from the request
 
            $user->status = $request->status;
            $res = $user->save();

            if ($res) {
                return back();
            }
        }
    }

    public function activeaccounts(){
        $users = User::all();
        return view('activeaccounts', compact('users'));

    }


    public function activeuser2(Request $request){
        $request->validate([
         
            'status'=>'required',
            

        ]);

        $userId = $request->id; // Change 'package_id' to the actual identifier you use

        // Retrieve the existing package
        $user = User::find($userId);

        // Check if the package exists
        if ($user) {
            // Update the package properties with the new values from the request

            $user->status = $request->status;
            
            $res = $user->save();

            if ($res) {
                return back();
            }
        }
    }

    public function activeuser3(Request $request){
        
        $userId = $request->id; // Change 'package_id' to the actual identifier you use

        // Retrieve the existing package
        $user = User::find($userId);

        // Check if the package exists
        if ($user) {
            // Update the package properties with the new values from the request

            $user->status = $request->status;
            
            $res = $user->save();

            if ($res) {
                return back();
            }
        }
    }

    public function deleteuser($id){
        DB::table('users')->where('id', $id)->delete();
        return back();
    }

    public function pendingaccounts(){
        $users = User::all();
        return view('pendingaccounts', compact('users'));
        
    }

    public function suspendeduser(){
        $users = User::all();
        return view('suspendeduser', compact('users'));
        
    }




    public function adminaccounts()
    {
        if(Session::has('loginId')){
            $userId = Session::get('loginId');
            $user = User::find($userId);

            if($userId==1){

                $admins = Admin::all();
                return view('adminaccounts', compact('admins'));
            }else{
                return redirect('admin_panel')->with('fail', 'Sorry! You have not access');
            }
        }
        
    }

    public function deleteadmin($id){
        DB::table('admins')->where('id', $id)->delete();
        return back();
    }

    public function suspendadmin(Request $request){
       

        $adminId = $request->id; // Change 'package_id' to the actual identifier you use

        // Retrieve the existing package
        $admin = Admin::find($adminId);

        if ($admin) {
        $admin->status = $request->status;
        
        
        $res = $admin->save();
        
            if ($res){
                
                return back();

            }

        }


    }

    public function susadmin()
    {
        if(Session::has('loginId')){
            $userId = Session::get('loginId');
            $user = Admin::find($userId);

            if($userId==1){

                $admins = Admin::all();
                return view('suspendedadmin', compact('admins'));
            }else{
                return redirect('admin_panel')->with('fail', 'Sorry! You have not access');
            }
        }
        
    }

    public function activeadmin(Request $request){
       

        $adminId = $request->id; // Change 'package_id' to the actual identifier you use

        // Retrieve the existing package
        $admin = Admin::find($adminId);

        if ($admin) {
        $admin->status = $request->status;
        
        
        $res = $admin->save();
        
            if ($res){
                
                return back();

            }

        }


    }


}
