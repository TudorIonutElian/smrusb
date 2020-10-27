<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judete extends Model
{
    use HasFactory;
    protected $table="judete";

    public function getRegiune(){
        return $this->belongsTo('App\Models\Regiuni', 'regiune');
    }
}
