<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;


// Adds relevant classes required for the Controller to function.

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function registration()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([ //Sets the email and password fields to be required
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        // Requests the email and password from the database, so it can check if the user is valid.
        if (Auth::attempt($credentials)) {
            // If the user's information is found in the database...
            return redirect()->intended('profile');
            //... Redirect them to their profile.
        }
        return Redirect::to("login")->withSuccess('You have entered invalid credentials.');
        // Else tell the user they have entered invalid credentials
    }

    public function postRegistration(Request $request)
        //POST Method for the registration page
    {
        request()->validate([  // Validation so that the below fields are required
            'name' => 'required',
            'email' => 'required|email|unique:users', //Sets the email to be unique, so checks the databse to see if its taken or not
            'password' => 'required|min:6', //Password verification to 6 characters minimum
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("profile")->withSuccess('You have Successfully logged in.');
    }

    public function profile()
    {
        if(Auth::check()){
            return view('profile');
        }
        return Redirect::to("login")->withSuccess('Oops! You do not have access');
    }

    public function create(array $data)
        //Function for the creation of a user via Laravel
    {
        return User::create([ //Create the below details and add them to the database
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
            // Adds password hashing so the passwords are not stored in plain text
        ]);
    }

    public function logout() { //Logout function
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
