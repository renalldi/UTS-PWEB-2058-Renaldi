<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('', function () {
    return view('auth.login');
})->name('login');

// Halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Halaman register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Menangani form register dan redirect ke login
Route::post('/register', function (Request $request) {
    // Validasi input (misalnya, wajib ada email dan password)
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Simpan data pengguna ke dalam session
    session([
        'registered_email' => $request->email,
        'registered_password' => $request->password
    ]);

    // Menyimpan pesan notifikasi di session
    session()->flash('success', 'Registration successful. Please login.');

    // Redirect ke halaman login
    return redirect()->route('login');
});

// Menangani submit form login
Route::post('/login', function (Request $request) {
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Cek apakah email dan password sesuai dengan yang didaftarkan
    $registeredEmail = session('registered_email');
    $registeredPassword = session('registered_password');

    if ($request->email === $registeredEmail && $request->password === $registeredPassword) {
        // Jika sesuai, redirect ke halaman contact dengan notifikasi
        session()->flash('success', 'You are successfully logged in!');
        return redirect('/contact');
    } else {
        // Jika tidak sesuai, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors([
            'email' => 'Invalid email or password.'
        ]);
    }
});

// Halaman contact
Route::get('/contact', function () {
    return view('pages.contact');
});
