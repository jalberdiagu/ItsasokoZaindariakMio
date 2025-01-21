<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erreskatatuak extends Model
{
    use HasFactory;

    protected $fillable = ['izena', 'abizena', 'adina', 'erreskateak_id'];

    //Erreskateak taularekin erlazioa
    public function erreskateak() {
        return $this->belongsTo(Erreskateak::class);
    }

}
