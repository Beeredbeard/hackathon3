<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinic</title>
</head>
<body>
    
    <ul>
        @foreach ($animals as $animal)
        <li>
            <a href="{{ action('AnimalsController@findAnimal',['id'=>$animal->id])}}">{{$animal->name}}</a>
        </li>
        
        @endforeach
    </ul>
</body>
</html>