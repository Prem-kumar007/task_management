<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login()
    {
       return view('authentication.login');
    } 
    public function register()
    {
       return view('authentication.register');
    } 

    public function login_post(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return response()->json(['success' => true,'message'=>'You have Successfully loggedin'],200);
        }
        return response()->json(['success' => false,'message'=>'Invalid credentials'],401);
      
    }
    

    // public function register_user(Request $request) 
    // {
    //     try {
    //         //code...
       
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'name'=>'required',
    //         'password' => 'required_with:cpassword|same:cpassword',
    //     ]);
    //     $request['password'] = Hash::make($request['password']);
    //     $request['type'] =0;
    //     $data = $request->except(['_token','cpassword']);
       
    //      User::create($data);
        
    //      return response()->json(['success'=>true,'message'=>'Great! You have Successfully Registered!..'],200);
    //     //  return redirect()->route('login')->withSuccess('Great! You have Successfully Registered!..');
    //     // return back()->with('Success', 'Your form has been submitted.');  
    //     } catch (\Throwable $th) {
    //         return response()->json(['success'=>false,'message'=>$th->getMessage()],400);
    //     }
    // }

    public function logout()
    {
         Session::flush();
         Auth::logout();
         return back();
    }

}
