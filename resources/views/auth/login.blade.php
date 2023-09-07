@extends('layouts.app')
@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input id="email" type="email"
                    class="w-full px-4 py-2 border rounded-md @error('email') border-red-300 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-red-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" type="password"
                    class="w-full px-4 py-2 border rounded-md @error('password') border-red-300 @enderror" name="password"
                    required autocomplete="current-password">

                @error('password')
                    <span class="text-red-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center"  for="remember">
                    <input type="checkbox"  name="remember" id="remember" class="form-checkbox text-indigo-600 h-5 w-5"
                    {{ old('remember') ? 'checked' : '' }}>
                    <span class="ml-2"> {{ __('Remember Me') }}</span>
                </label>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
@endsection
