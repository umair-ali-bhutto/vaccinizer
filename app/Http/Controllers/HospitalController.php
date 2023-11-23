<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use App\Models\requesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    
   
    public function register()
    {
        return view('hospital.register');
    }
    public function doregister(Request $request)
    {
            $hospital = new hospital();
            $hospital->name = $request->name;
            $hospital->email = $request->email;
            $hospital->password = $request->password;
            $hospital->phone = $request->phone;
            $hospital->address = $request->address;
            $hospital->vaccine_name = $request->vaccine_name;
            $hospital->vaccine_status = $request->vaccine_status;
            
            $hospital->save();
            return redirect('hospitallogin')->with('create', 'you have successfully registered kindly log in to continue');
        
    }
    public function dashboard()
    {
        $requesting = requesting::all();
        return view('hospital.dashboard', compact('requesting'));
    
    }
    public function login()
    {
        return view('hospital.login');
    }

    public function dologin(Request $request)
    {
        $email  = $request->post('email');
        $password  = $request->post('password');
        $result = hospital::where(['email'=>$email,'password'=>$password])->get();

        if(isset($result['0']->id)){
            $request->Session()->put('hospitalid', $result['0']->id);
            return redirect('hospitaldashboard');
        }
        else{
            return back()->with('create','invalid credential');
        }

    }



    function logout()
    {
        Auth::logout();
        return redirect("hospitallogin")->with('create', 'Logout successfully');;
    }
}
