<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration complete</title>
</head>
<body>
    <main>
        <h1>Registration complete</h1>
        <p>Welcome, {{ $user->name }}. Your account has been created.</p>
        <a href="{{ route('home') }}">Back home</a>
    </main>
</body>
</html>
