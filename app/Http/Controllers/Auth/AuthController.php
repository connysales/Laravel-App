<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function registration()
    {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.registration');
    }

    /**
     * Handle user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('You have Successfully logged in');
        }

        return redirect("login")->withSuccess('Oops! You have entered invalid credentials');
    }

    /**
     * Handle user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required|in:customer,barber,admin' // Add validation rule for user_type
        ]);

        $data = $request->all();

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->user_type = $data['user_type'];
        $user->save();

        return redirect("home")->withSuccess('Great! You have Successfully registered and logged in');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'], // The hashed password is already assigned
        ]);
    }

    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        if (Auth::check()) {
            return view('home');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function admin()
    {
        if (Auth::check()) {
            return view('admin');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }


    public function about()
    {
        if (Auth::check()) {
            return view('about');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function contact()
    {
        if (Auth::check()) {
            return view('contact');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function price()
    {
        if (Auth::check()) {
            return view('price');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    
    public function customer()
    {
        if (Auth::check()) {
            return view('customer');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function services()
    {
        if (Auth::check()) {
            return view('services');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function barber()
    {
        if (Auth::check()) {
            return view('barber');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function testimonial()
    {
        if (Auth::check()) {
            return view('testimonial');
        }

        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
}
