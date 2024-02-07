<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request, string $id)
    {
        $User = User::findOrFail($id);
        $User->email = $request->input("email");
        $User->password= $request->input("password");
        $User->save();

    }
    public function regester()
    {

    }
    public function storeLogin()
    {

    }
    public function storeRegester()
    {

    }
}
