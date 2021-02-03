<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiuni extends Model
{
    use HasFactory;

    protected $table="regiuni";

    /* ------------------ AFISARE JUDETE------------------*/
    public function getJudete(){
        return $this->hasMany('App\Models\Judete', 'regiune');
    }
}
