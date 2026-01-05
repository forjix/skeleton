<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Welcome to Forjix' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Forjix</h1>
        <p>A lightweight, modular PHP framework</p>

        @if(isset($user))
            <p>Hello, {{ $user->name }}!</p>
        @else
            <p>Welcome, guest!</p>
        @endif

        @foreach($features as $feature)
            <div class="feature">
                <h3>{{ $feature['title'] }}</h3>
                <p>{{ $feature['description'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
