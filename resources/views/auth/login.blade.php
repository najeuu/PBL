

@extends('components')

@section('content')
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto my-12 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input id="email" type="email" class="form-input mt-1 block w-full rounded-md border-gray-300" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="text-red-600 mt-1" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <input id="password" type="password" class="form-input mt-1 block w-full rounded-md border-gray-300" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-600 mt-1" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:text-blue-700" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection


