<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <main>
        <h1>Student Registration</h1>

        @if ($errors->any())
            <div role="alert">
                <p>Please correct the following:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div>
                <label for="name">Full name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="255" autocomplete="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="255" autocomplete="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required minlength="8" autocomplete="new-password">
            </div>
            <div>
                <label for="password_confirmation">Confirm password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required minlength="8" autocomplete="new-password">
            </div>
            <button type="submit">Create account</button>
        </form>

        <p><a href="{{ route('home') }}">Back home</a></p>
    </main>
</body>
</html>
