<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripulanteak extends Model
{
    use HasFactory;

    protected $fillable = [
        "izena",
        "abizena",
        "eginkizuna",
        "sartze_data",
        "baja_data"
    ];

    //Bidaia taularekin erlazioa
    public function bidaiak() {
    return $this->belongsToMany(Bidaiariak::class, 'bidaia_tripulanteak')->withPivot('eginkizuna')->withTimestamps();
    }



}
