<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Here we validate input, this also generates error messages automagically
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email:rfc,dns|max:255',
            'password' => 'required|min:7',
        ]);

        // Send to db
        $register = new User();
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = Hash::make($request->input('password'));
        $register->save();

        return redirect('/')->with('success', "You're all set. Please log in!");
    }
}
