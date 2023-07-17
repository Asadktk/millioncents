<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create(){
        return view('admin.register');
    }

     //Create new User
     public function register(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = Admin::create($formFields);

        //Login
        auth()->login($user);

        return redirect('dashboard')->with('message', 'User created and logged in');
    }

     //Show Login Form
     public function login(){
        return view('admin.login');
    }

    //Authenticate User
    public function authenticateadmin(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
        
            'email' => 'required',
            'password' => 'required', 
        ]);

        if(Auth::guard('admin')->attempt($formFields)){
            $request->session()->regenerate(); 

            return view('admin.dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

     //Logout User
     public function logout(Request $request){
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
     public function dashboard  (){
        return view('admin.dashboard'); 
     }
}
