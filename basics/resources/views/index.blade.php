<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/main.css'])
</head>
<body>
    <main class="index">
        <h1>This is a simple app used to learn laravel</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, repellat.</p>

        <div style="">
            <a 
            href="{{ route('main') }}"
            {{-- style="outline: none; text-decoration: none" --}}
            > ---> </a>
        </div>
    </main>
</body>
</html>