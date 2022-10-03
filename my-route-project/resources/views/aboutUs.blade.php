<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us Page</title>
</head>
<body>
    <h1>Welcome to the About Us Page</h1>

    <ul style="display: flexbox">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
    </ul>
</body>
</html>