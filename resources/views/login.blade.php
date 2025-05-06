@extends('layouts.auth')

@section('content')

    <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="color: #2a3f36; font-size: 28px; margin-bottom: 10px;">Selamat Datang</h2>
        <p style="color: #6c757d; margin-top: 0;">Silakan masuk ke akun Anda</p>
    </div>

    <form method="POST" action="{{ route('login') }}" style="width: 100%;">
        @csrf

        <div style="margin-bottom: 20px;">
            <label for="username" style="display: block; text-align: left; margin-bottom: 8px; color: #2a3f36; font-weight: 500;">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username"
                   style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;"
                   required>
        </div>

        <div style="margin-bottom: 25px;">
            <label for="password" style="display: block; text-align: left; margin-bottom: 8px; color: #2a3f36; font-weight: 500;">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password"
                   style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;"
                   required>
        </div>

        <button type="submit"
                style="width: 100%; padding: 12px; background-color: #2a3f36; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: 500; cursor: pointer; transition: background-color 0.3s;">
            Login
        </button>

    </form>


@endsection
