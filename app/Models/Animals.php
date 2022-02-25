<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Animals extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Owners::class);
    }

    public function filterByOwnerID($id)
    {
        $result = DB::table('animals')->where('owner_id', '=', $id)->get();
        return ($result);
    }
}