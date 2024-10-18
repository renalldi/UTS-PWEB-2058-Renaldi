<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" class="w-full px-4 py-2 border rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autofocus>

                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input id="password" type="password" class="w-full px-4 py-2 border rounded-md @error('password') border-red-500 @enderror" name="password" placeholder="Masukkan Password" required>

                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Show/Hide Password Checkbox -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="show-password" class="mr-2">
                <label for="show-password" class="text-gray-700">Tampilkan Password</label>
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Login
                </button>
            </div>
        </form>

        <!-- Belum Punya Akun -->
        <div class="text-center">
            <p class="text-gray-700">Belum punya akun?</p>
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar di sini</a>
        </div>
    </div>
</div>

<!-- Script Show/Hide Password -->
<script>
    document.getElementById('show-password').addEventListener('change', function () {
        let passwordField = document.getElementById('password');
        
        if (this.checked) {
            passwordField.type = 'text';
        } else {
            passwordField.type = 'password';
        }
    });
</script>
@endsection
