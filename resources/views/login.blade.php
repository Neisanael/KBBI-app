@extends('layouts.layout') <!-- Extend the layout -->

@section('content')
    <!-- Define the content section -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="loginForm" method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/loginForm.css') }}">
@endsection

@section('title')
    <title>Login</title>
@endsection
