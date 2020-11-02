<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judete extends Model
{
    use HasFactory;
    protected $table="judete";


    /* ------------------ AFISARE REGIUNE------------------*/
    public function getRegiune(){
        return $this->belongsTo('App\Models\Regiuni', 'regiune');
    }

    /* ------------------ AFISARE LOCALITATI------------------*/
    public function getLocalitati(){
        return $this->hasMany('App\Models\Localitati', 'judet');
    }
}
