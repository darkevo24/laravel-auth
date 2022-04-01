<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

class AuthController extends Controller
{
    public function register(){
        return view("register");
    }

    function dataRegister(Request $request){
        $request->validate([
            "email" => "required|email:dns",
            "password" => "required"
        ]);

        login::create([
            "email" => $request->email,
            "password" =>Hash::make($request->password)
        ]);

        return redirect("/login");
    }

    public function login(){
        return view("login");
    }

    public function dashboard (Request $request){
        $data = users::all();
        return view("dashboard",compact("data"));
    }

    public function insert (){
        return view("insert");
    }

    public function insertData (Request $request){
        $request->validate([
            "email" => "required|email:dns",
            "username" => "required",
            "phone" => "required"
        ]);

        users::create([
            "email" => $request->email,
            "username" =>$request->username,
            "phone" => $request->phone
        ]);

        return redirect("/dashboard");
    }

    public function loginData(Request $request){
        $request->validate([
            "email" => "required|email:dns",
            "password" => "required"
        ]);
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])){
            return redirect("/dashboard");
        }
        return back()->withErrors("password","wrong username or password!");
    }

    public function edit($id){
        $data = users::find($id);
        return view("edit",compact("data"));
    }

    public function update($id,Request $request){
        $data = users::find($id);
        $data->update($request->all());
        return redirect("/dashboard",compact("data"));
    }
}
