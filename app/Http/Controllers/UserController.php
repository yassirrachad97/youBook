<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
       return view("login");

    }
    public function regester()
    { 
        
return view("regester");
    }
    public function signing(Request $request)
    {
        $User= new User();
        $User->email = $request->input("email");
        $User->password= $request->input("password");
        $User->save();
        return redirect()->route("books.index");
    }
    public function singup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $User= new User();
        $User->name = $request->input("name");
        $User->email = $request->input("email");
        $User->password= $request->input("password");
        $User->save();
        // return redirect()->route("login");
    }
}
