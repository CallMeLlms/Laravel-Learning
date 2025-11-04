<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Project')</title>
    @vite(['resources/css/main.css'])
</head>
<body>
    
    <main class="m-parent">
        <div class="m-container">
            @yield('form-content')
            <!-- <p>lorem5</p> -->
        </div>

        {{-- <div class="">
            <p>footer burat</p>
        </div> --}}

        <x-Footer/>
    </main>

</body>
</html>