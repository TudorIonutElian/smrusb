<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiuni extends Model
{
    use HasFactory;

    protected $table="regiuni";

    public function Judete(){
        return $this->hasMany('App\Models\Judete', 'regiune');
    }
}
