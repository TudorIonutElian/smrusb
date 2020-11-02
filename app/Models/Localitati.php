<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localitati extends Model
{
    use HasFactory;
    protected $table="localitati";


    /* ------------------ AFISARE JUDET------------------*/
    public function getJudet(){
        return $this->belongsTo('App\Models\Judet', 'judet');
    }
}
