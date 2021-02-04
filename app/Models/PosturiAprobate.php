<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosturiAprobate extends Model
{
    use HasFactory;
    protected $table="posturi_aprobate";



    /* ------------------ AFISARE ordonator------------------*/
    public function getOrdonator(){
        return $this->belongsTo('App\Models\Ordonatori', 'ordonator_id');
    }
}
