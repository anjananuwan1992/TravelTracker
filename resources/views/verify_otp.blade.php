<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verfy OTP</title>
</head>
<body>
<form method="POST" action="{{ route('verify.otp') }}">
    @csrf
    <input type="text" name="email" placeholder="Enter Email">
    <input type="text" name="otp" placeholder="Enter OTP">
    <button type="submit">Verify OTP</button>
</form>
</body>
</html>