<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData (nama variable) boleh bebas
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // menggunakn Hashing laravel
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //flash message
        // $request->session()->flash('success', 'Registration successful! Please Login!');

        // flash message bersama redirect
        return redirect('/login')->with('success', 'Registration successful! Please Login!');
    }
}
