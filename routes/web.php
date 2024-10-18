<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('', function () {
    return view('auth.login');
})->name('login');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);

    session([
        'registered_email' => $request->email,
        'registered_password' => $request->password
    ]);

    session()->flash('success', 'Registration successful. Please login.');

    return redirect()->route('login');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $registeredEmail = session('registered_email');
    $registeredPassword = session('registered_password');

    if ($request->email === $registeredEmail && $request->password === $registeredPassword) {
        session()->flash('success', 'You are successfully logged in!');
        return redirect('/contact');
    } else {
        return redirect()->route('login')->withErrors([
            'email' => 'Invalid email or password.'
        ]);
    }
});

Route::get('/contact', function () {
    return view('pages.contact');
});
