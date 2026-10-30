@extends('layouts.app')

@section('title', 'Sign in · Bakuna Tracker')

@section('content')
<div class="min-h-[65vh] flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg border border-[#e8dfcf] p-8 w-full max-w-md">
        <div class="text-center mb-7">
            <div class="text-4xl mb-3">💉</div>
            <h1 class="text-2xl font-extrabold">Bakuna Tracker</h1>
            <p class="text-sm text-[#947e67] mt-2">Purok Dimatulac · Health Worker Sign In</p>
        </div>
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block font-semibold text-sm mb-2">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    class="w-full rounded-lg border border-[#ded5c6] p-3 focus:outline-none focus:ring-2 focus:ring-[#d5954e]" placeholder="nurse.dimatulac@bakuna.test">
                @error('email') <p class="text-red-600 text-sm mt-2">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="password" class="block font-semibold text-sm mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full rounded-lg border border-[#ded5c6] p-3 focus:outline-none focus:ring-2 focus:ring-[#d5954e]">
                @error('password') <p class="text-red-600 text-sm mt-2">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="w-full bg-[#d5954e] hover:bg-[#b97a35] text-white font-bold py-3 rounded-lg">Sign In</button>
        </form>
    </div>
</div>
@endsection
