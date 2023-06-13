<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $r, User $user){
        if(Auth::check()){
            return redirect(route('home'));
        }

        return view('login');
    }

    public function login_action(Request $r, User $user){
        $validade = $r->validate([
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);


        if(Auth::attempt($validade)){
            return redirect(route('home'));
        }

    }

    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('register');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function register_action(Request $r, User $user){
        $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
            // dd($r->all());
        $data = $r->only(['name','email', 'password',]);

        // $data['password'] == Hash::make($data['password']);

        $user->create($data);

        return redirect(route('login'));

    }
}
