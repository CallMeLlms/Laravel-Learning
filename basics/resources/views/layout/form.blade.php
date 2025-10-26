@extends('layout.main')

@section('form-content')
    <form action="" method="POST">
        <div class="m-form-container">
            @csrf
            <h1 class="h1-reusable">Sign in<h1>
                
            <div class="m-input-container">
                <label>username</label>
                <input/>
            </div>

            <div class="m-input-container">
                <label>passowrd</label>
                <input/>
            </div>

        </div>
    </form>
@endsection