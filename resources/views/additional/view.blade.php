<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car list</title>
</head>
<body>
    <ul>
        @foreach($cars as $car)
            <li>
            <a href="{{ route('single-car', ['id' => $car->id]) }}">
                {{ $car->producer }}
            </a>
            with {{ $car->number_of_doors }} doors</li>
        @endforeach
    </ul>
</body>
</html>