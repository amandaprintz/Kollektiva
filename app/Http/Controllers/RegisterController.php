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
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'tel' => 'required|min:10|numeric',
            'email' => 'required|unique:users|email:rfc,dns|max:255',
            'password' => 'required|confirmed|min:7',
        ]);

        // Send to db
        $register = new User();
        $register->first_name = $request->input('first_name');
        $register->last_name = $request->input('last_name');
        $register->tel = $request->input('tel');
        $register->email = $request->input('email');
        $register->password = Hash::make($request->input('password'));
        $register->save();

        return redirect('login')->with('success', "Ny konto har skapats! Vänligen logga in för att komma igång.");
    }
}
