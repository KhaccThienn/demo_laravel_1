<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index func of Product Controller</h1>
    <h3>{{ $title }}</h3>
    <h4>{{ $name }}</h4>
    @foreach ($myphone as $item)
        <p>{{ $item }}</p>
    @endforeach
</body>
</html>
