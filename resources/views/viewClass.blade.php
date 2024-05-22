<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title}}</h1>
        @foreach ($arr as $key => $item)
            <h3>{{$key}}->{{$item}}</h3>
        @endforeach
        @foreach ($object as $key => $item)
            <h4>{{$key}} -> {{$item}}</h4>
        @endforeach
</body>
</html>