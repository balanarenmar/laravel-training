<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        //form validation
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:20']
        ]);
        return 'Hello from the controller';
    }
}
