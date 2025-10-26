@extends('layout.main')

@section('form-content')
    <form action="/login" method="POST">
        <div class="m-form-container">
            @csrf
            <h1 class="h1-reusable">Sign In</h1>
            
            <div class="m-input-container">
                <label class="m-resuable-label">Username</label>
                <input type="text" name="username"/>
            </div>

            <div class="m-input-container">
                <label class="m-resuable-label">Password</label>
                <input type="password" name="password"/>
            </div>
            
            <button type="submit">Login</button>
        </div>
    </form>
@endsection
