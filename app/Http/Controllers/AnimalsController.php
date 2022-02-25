<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{

    /**
     * Get All the animals and pass them to the view
     * to be listed
     */
    public function index()
    {
        $animals =  Animals::all();
        return view('index', compact('animals'));
    }

    /**
     * Find an animal by its DB id
     */
    public function findAnimal($id)
    {
        $animal = Animals::findOrFail($id);

        return view('animal', compact('animal'));
    }

    public function filterByOwnerID($id)
    {
        $result = Animals::findAll()->where('owner_id', '=', $id);
        dump($result);
    }

    public function search(Request $request){

        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the animals table
        $animals = Animals::query()
            ->where('name', 'LIKE', '%' . $search . '%')
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('animals'));
        // dd($animals);
    }
}
