<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><strong>Name:</strong>{{ $dataReceived['name'] }}</p>
    <p><strong>Email:</strong>{{ $dataReceived['email'] }}</p>
    <br>
    <h2>message</h2>
    {{ $dataReceived['message'] }}

</body>
</html>