<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiuni extends Model
{
    use HasFactory;

    protected $table="regiuni";

    // Anulare coloane created_at si updated_at
    public $timestamps = false;

    /* ------------------ AFISARE JUDETE------------------*/
    public function getJudete(){
        return $this->hasMany('App\Models\Judete', 'regiune');
    }
}
