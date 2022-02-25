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
}
