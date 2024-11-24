<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function dash()
    {
        return view('user.dashboard');
    }

    public function ulogin()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    
    public function adduser( Request $request)
    {
        
         $validated =$request->validate([
            'username' => 'required|max:255|string',
            'email' => 'required|email|max:255', // Validates email format and ensures uniqueness
            'password' => [
                'required',
                'string',
                'min:4', // Minimum 8 characters
                'max:255', // Optional: restricts password length
                 // Ensures password confirmation matches   
            ],   
        ]);

        User::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
           
        ]);

        // Redirect back with a success message
        return redirect('/')->with('status', 'account created successfully');
        }
       
      
    
}
