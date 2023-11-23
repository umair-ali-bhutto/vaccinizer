<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\user;
use App\Models\hospital;
use App\Models\requesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    
    public function showuser()
    {
        $user = user::all();
        return view('admin.showuser', compact('user'));
    }
    public function showhospital()
    {
        $hospital = hospital::all();
        return view('admin.showhospital', compact('hospital'));
    }
    public function showrequest()
    {
        $request = requesting::all();
        return view('admin.showrequests', compact('request'));
    }
    
    public function deleteuser($id)
    {
        $currentPhoto = user::find($id)->image;  //fecthing user current photo
        $userPhoto = public_path('images/users/').$currentPhoto;
        unlink($userPhoto);
        $student = user::find($id);
        $student->delete();
        return redirect()->back()->with('delete', 'User Deleted Successfully');
    }
    public function deletehospital($id)
    {
        
        $hospital = hospital::find($id);
        $hospital->delete();
        return redirect()->back()->with('delete', 'Hospital Deleted Successfully');
    }
    public function deleterequest($id)
    {
        $request = requesting::find($id);
        $request->delete();
        return redirect()->back()->with('delete', 'Request Deleted Successfully');
    }



   
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        $email  = $request->post('email');
        $password  = $request->post('password');
        $result = admin::where(['email'=>$email,'password'=>$password])->get();

        if(isset($result['0']->id)){
            $request->Session()->put('adminid', $result['0']->id);
            $request->Session()->put('adminname', $result['0']->name);
            return redirect('admindashboard');
        }
        else{
            return back()->with('create','invalid credential');
        }

    }



    function logout()
    {
        Auth::logout();
        return redirect("admin")->with('create', 'Logout successfully');;
    }
}
