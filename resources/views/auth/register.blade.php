@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Sign Up</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium mb-1">Name</label>
                <input id="name" type="text"
                    placeholder="Name"
                    class="w-full px-4 py-2 border rounded-md @error('name') border-red-300 @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="text-red-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input id="email" type="email"
                    placeholder="Email"
                    class="w-full px-4 py-2 border rounded-md @error('email') border-red-300 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="text-red-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" type="password"
                    placeholder="Password"
                    class="w-full px-4 py-2 border rounded-md @error('password') border-red-300 @enderror" name="password"
                    required autocomplete="new-password">
                @error('password')
                    <span class="text-red-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password-confirm" class="block text-sm font-medium mb-1">Password</label>
                <input id="password-confirm" type="password" placeholder="Confirm password" class="w-full px-4 py-2 border rounded-md"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                Sign Up
            </button>
        </form>
    </div>
@endsection
