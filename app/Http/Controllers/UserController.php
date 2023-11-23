<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\requesting;
use App\Models\hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
 
    public function request(Request $r)
    {
        $u = new requesting();
        $u->vaccine_name = $r->vaccine_name;
        $u->vaccine_status = $r->vaccine_status;
        $u->date = $r->date;
        $u->save();

        return redirect()->back()->with('request','requested');
    }
    public function showprofile($id)
    {
        $users = user::where(['id'=>$id])->get();
        return view('user.showprofile', compact('users'));
    }
  

    public function edit($id)
    {
        $user = user::find($id);
        return view('user.editprofile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = user::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->dob = $request->dob;
            $user->gender = $request->gender;
            $user->occupation = $request->occupation;
            $user->address = $request->address;
            $user->nationality = $request->nationality;
            $user->marital_status = $request->marital_status;
        if($request->hasfile('image'))
        {
           
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/users/', $filename);
            $user->pic = $filename;
        }
        $user->update();
        return redirect("dashboard");
    }
    public function register()
    {
        return view('user.register');
    }
    public function doregister(Request $request)
    {
            $user = new user();
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('images/users/', $filename);
                $user->pic = $filename;
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->dob = $request->dob;
            $user->gender = $request->gender;
            $user->occupation = $request->occupation;
            $user->address = $request->address;
            $user->nationality = $request->nationality;
            $user->marital_status = $request->marital_status;
            $user->save();
            return redirect('login')->with('create', 'you have successfully registered kindly log in to continue');
        
    }
    public function dashboard()
    {
        $hospital = hospital::all();
        return view('user.dashboard', compact('hospital'));
    
    }
    public function login()
    {
        return view('user.login');
    }

    public function dologin(Request $request)
    {
        $email  = $request->post('email');
        $password  = $request->post('password');
        $result = user::where(['email'=>$email,'password'=>$password])->get();

        if(isset($result['0']->id)){
            $request->Session()->put('userid', $result['0']->id);
            return redirect('dashboard');
        }
        else{
            return back()->with('create','invalid credential');
        }

    }



    function logout()
    {
        Auth::logout();
        return redirect("login")->with('create', 'Logout successfully');;
    }
}
