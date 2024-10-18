<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-center mb-6">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input id="name" type="text" class="w-full px-4 py-2 border rounded-md @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required autofocus>

                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" class="w-full px-4 py-2 border rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required>

                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password </label>
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
                    Register
                </button>
            </div>
        </form>

        <!-- Sudah Punya Akun -->
        <div class="text-center">
            <p class="text-gray-700">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login di sini</a>
        </div>
    </div>
</div>

<!-- Script Show/Hide Password -->
<script>
    document.getElementById('show-password').addEventListener('change', function () {
        let passwordField = document.getElementById('password');
        let confirmPasswordField = document.getElementById('password-confirm');
        
        if (this.checked) {
            passwordField.type = 'text';
            confirmPasswordField.type = 'text';
        } else {
            passwordField.type = 'password';
            confirmPasswordField.type = 'password';
        }
    });
</script>
@endsection
