<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoping</title>
</head>
<body>
    <h1>{{$details['title']}}</h1>
    <p>
        {{$details['body']}}
    </p>
    
        @if (Session::has('newpass'))
        <p>{{Session::get('newpass')}}</p>
    @endif
    
    <p>Shopping Store</p>
</body>
</html>