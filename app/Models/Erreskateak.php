<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erreskateak extends Model
{
    use HasFactory;

    protected $table = 'erreskateaks';
    protected $fillable = ['izena', 'deskribapena', 'data'];

    //Erreskatatuak taularekin erlazioa
    public function erreskatatuak() {
        return $this->hasMany(Erreskatatuak::class);
    }

}//Klasearen amaiera
