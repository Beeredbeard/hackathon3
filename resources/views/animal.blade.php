<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Name of pet: {{$animal->name}}</title>
</head>
<body>
    <div class="animal__container">
        <img src="/images/pets/{{strtolower($animal->name)}}.jpg" alt="image of lovely {{$animal->name ?? $animal->name.' is missing'}}">
        <div class="animal__details">
        <div>
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
        <div>
            <table>
                    <tr>
                       <td>Owner name:</td>
                       <td>{{$animal->owner->first_name}}</td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td>{{$animal->owner->surname}}</td>
                     </tr>   
                     <tr>
                        <td>📧</td>
                        <td>{{$animal->owner->email ?? 'Not found'}}</td>
                     </tr> 
                     <tr>
                        <td>☎️</td>
                        <td>{{$animal->owner->phone ?? 'Not found'}}</td>
                     </tr>  
                     <tr>
                        <td>🏡</td>
                        <td>{{$animal->owner->adress ?? 'Not found'}}</td>
                     </tr>
                     <tr>
                        <td>Last update:</td>
                        <td>{{$animal->owner->updated_at}}</td>
                     </tr>
                     <tr>
                         <td>Pets listed under this owner</td>
                         <td>
                         @foreach ($animal->filterByOwnerID($animal->owner_id) as $pet)
                             <a href="{{ action('AnimalsController@findAnimal',['id'=>$pet->id])}}">{{$pet->name}}</a>
                         @endforeach
                        </td>
                     </tr>
            </table>
        </div>
    </div>
</body>
</html>