<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login(Request $request) {
        //call globally available auth function
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' =>  'required'
        ]);

        if (auth()->attempt([
            'name' => $incomingFields['loginname'],
            'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');

    }

    public function logout() {
        //call globally available auth function
        auth()->logout();
        return redirect('/');
    }



    public function register(Request $request) {
        //form validation
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],   //make sure this field is unique
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:20']
        ]);

        //encrypt password using laravel's bcrypt hash
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        //Laravel default User Model
        $user = User::create($incomingFields);

        auth()->login($user);

        //return 'Hello from the controller';

        //redirect to main
        return redirect('/');
    }
}
