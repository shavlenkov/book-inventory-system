@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')

    <div class="flex justify-center">
        <div class="mx-auto mt-4"  style="width: 30%;">
            <h3 class="text-center text-2xl font-bold">Sign Up</h3>
            <form method="POST" action="{{ route('post.signup') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block">Name</label>
                    <input type="text" class="w-full px-4 py-2 border" value="{{ old('name') }}" name="name" id="name"/>
                </div>
                <div class="mb-4">
                    <label for="email" class="block">Email</label>
                    <input type="text" class="w-full px-4 py-2 border" value="{{ old('email') }}" name="email" id="email"/>
                </div>
                <div class="mb-4">
                    <label for="login" class="block">Password</label>
                    <input type="password" class="w-full px-4 py-2 border" name="password" id="password"/>
                </div>
                <div class="flex justify-between">
                    <a class="border border-gray-500 px-4 py-2  rounded-md" href="/signup">Sign In</a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2  rounded-md">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
