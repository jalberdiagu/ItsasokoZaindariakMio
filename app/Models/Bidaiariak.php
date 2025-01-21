<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidaiariak extends Model
{

    use HasFactory;

    protected $fillable = [
        "helmuga",
        "abiapuntua",
        "data"
    ];

    //Tripulanteak taularekin erlazioa
    public function tripulanteak() {
    return $this->belongsToMany(Tripulanteak::class, 'bidaia_tripulanteak')->withPivot('eginkizuna')->withTimestamps();
    }

}
