    @extends('index')
    @section('search')
        
    <form action="{{ action('AnimalsController@search') }}" method="GET">
        <input type="text" name="search" required/>
        <button type="submit">Search</button>
    </form>

    @endsection