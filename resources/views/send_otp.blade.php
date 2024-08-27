<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogot Email</title>
</head>
<body>
<form method="POST" action="{{ route('send.otp') }}">
    @csrf
    <input type="text" name="email" placeholder="Enter email">
    <button type="submit">verify your email</button>
</form>
    
</body>
</html>