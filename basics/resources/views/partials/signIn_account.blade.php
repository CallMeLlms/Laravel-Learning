@extends('layout.main')

@section('form-content')
    <form action="{{ route('signIn.post') }}" method="POST">
        <div class="m-form-container">
            <div class="m-form-container-items">
                @csrf
                <h1 class="h1-reusable">Sign In</h1>
                <div class="m-input-main-container">
                    <div class="m-input-container">
                        <label class="m-resuable-label">Username</label>
                        <input class="m-input" type="text" name="name"/>
                    </div>

                    <div class="m-input-container">
                        <label class="m-resuable-label">Password</label>
                        <input class="m-input" type="password" name="password"/>
                    </div>
                </div>
                
                <div class="m-btn-container">
                    <button class="m-btn" type="submit">Login</button>
                </div>
                
                <div class="m-form-create-container">
                    <a href="{{ route('signUp') }}">Create account</a>
                </div>
            </div>
        </div>
    </form>
@endsection
