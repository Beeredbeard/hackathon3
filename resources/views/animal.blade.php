<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name of pet: {{$animal->name}}</title>
</head>
<body>
    @dump($animal)
    <div class="animal__container">
        <div class="animal__details">
            <img src="/images/pets/{{strtolower($animal->name)}}.jpg" alt="image of lovely {{$animal->name ?? $animal->name.' is missing'}}">
            <table>
                    <tr>
                       <td>Owner:</td>
                       <td>{{$animal->owner->first_name}}</td>
                    </tr>
                    <tr>
                        <td>Pet Name:</td>
                        <td>{{$animal->name}}</td>
                    </tr>
                    <tr>
                        <td>Species:</td>
                        <td>{{$animal->species}}</td>
                    </tr>
                    <tr>
                        <td>Breed:</td>
                        <td>{{$animal->breed}}</td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td>{{$animal->age ?? 'Not logged'}}</td>
                    </tr>
                    <tr>
                        <td>Weight:</td>
                        <td>{{$animal->weight." Pounds" ?? 'not measured'}}</td>
                    </tr>
            </table>
        </div>
    </div>
</body>
</html>