<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
<form method="POST" action="{{ route('reset.password') }}">
    @csrf
    <input type="password" name="password" placeholder="New Password">
    <input type="password" name="password_confirmation" placeholder="Confirm New Password">
    <button type="submit">Reset Password</button>
</form>
</body>
</html>