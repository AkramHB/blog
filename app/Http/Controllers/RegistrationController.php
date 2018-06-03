<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Mail\WelcomeAgain;


class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }
    
    public function store() {
        $this->validate(request(), [
            'name' => 'required | min:3',
            'email' => 'required | email',
            'password' => 'required | confirmed',
        ]);

            $user = new User;
            $user->name = request('name');
            $user->email = request('email');
            $user->password = request('password');
            $user->save();

            // Sign in the user

            auth()->login($user);

            \Mail::to($user)->send(new WelcomeAgain($user));

            return redirect('/');
    
    } 
}
