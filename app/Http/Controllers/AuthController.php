<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\usersAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // verifie client
        $client = client::where('username', $request->username)->where('password', $request->password)->first();
        if($client){
            Session::put("client", $client);

            return redirect('/');
        }

        // verifie aministrateur
        $admin = usersAdmin::where('username', $request->username)->where('password', $request->password)->first();
        if($admin){
            Session::put("admin", $admin);

            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(){
        $checkClient = Session::has("client");

        if($checkClient){
            Session::forget("client");

            return redirect('/');
        }

        $checkAdmin = Session::has("admin");

        if($checkAdmin){
            Session::forget("admin");

            return redirect('/');
        }
    }

}
