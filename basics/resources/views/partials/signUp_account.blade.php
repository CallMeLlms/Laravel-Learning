@extends('layout.main')

@section('form-content')
    <form action="{{ route('signUp.post') }}" method="POST">
        <div class="m-form-container">
            <div class="m-form-container-items">
                @csrf
                <h1 class="h1-reusable">Sign Up</h1>
                <div class="m-input-main-container">
                    <div class="m-input-container">
                        <label class="m-resuable-label">Username</label>
                        <input class="m-input" type="text" name="name" value="{{ old('name') }}"/>
                    </div>

                    <div class="m-input-container">
                        <label class="m-resuable-label">Email</label>
                        <input class="m-input" name="email" type="email"  value="{{ old('email') }}"/>
                    </div>

                    <div class="m-input-container">
                        <label class="m-resuable-label">Password</label>
                        <input class="m-input" name="password"  type="password"/>
                    </div>

                    <div class="m-input-container">
                        <label class="m-resuable-label">Confirm Password</label>
                        <input class="m-input" name="password_confirmation" type="password"/>
                    </div>
                </div>
                
                <div class="m-btn-container">
                    <button class="m-btn" type="submit">Register</button>
                </div>

                @foreach (['name', 'email', 'password'] as $fields) 
                    @error($fields)
                        <div><p>{{ $message }}</p></div>
                    @enderror
                @endforeach
                
                <div class="m-form-create-container">
                    <a href="{{ route('signIn') }}">Back to login</a>
                </div>
            </div>
        </div>
    </form>
@endsection
