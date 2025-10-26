@extends('layout.main')

@section('title', 'Sign In Page')

@section('header')
    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
    </nav>
@endsection

@section('form-content')
    <form action="/login" method="POST">
        <div class="m-form-container">
            @csrf
            <h1 class="h1-reusable">Sign In</h1>
            
            <div class="m-input-container">
                <label>Username</label>
                <input type="text" name="username"/>
            </div>

            <div class="m-input-container">
                <label>Password</label>
                <input type="password" name="password"/>
            </div>
            
            <button type="submit">Login</button>
        </div>
    </form>
@endsection

@section('footer')
    <p>&copy; 2024 Mini Project</p>
@endsection