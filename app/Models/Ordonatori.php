<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonatori extends Model
{
    use HasFactory;

    protected $table="ordonatori";

    // Anulare coloane created_at si updated_at
    public $timestamps = false;


    /* ------------------ AFISARE LOCALITATI------------------*/
    public function getJudet(){
        return $this->belongsTo('App\Models\Judete', 'judet');
    }
}
