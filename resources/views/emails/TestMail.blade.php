<!DOCTYPE html>
<html>

<head>
    <title>FOX.com</title>
</head>

<body>
    <h1>{{ $details['title'] }}</h1>
    <h2>Name: {{$details['name']}}</h2>
    <h2>From: {{$details['email']}}</h2>
    <p>{{ $details['body'] }}</p>
    {{-- <p>Thank you</p> --}}
</body>

</html>