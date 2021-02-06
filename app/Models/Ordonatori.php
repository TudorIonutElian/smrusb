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


    /* ------------------ AFISARE Judet------------------*/
    public function getJudet(){
        return $this->belongsTo(Judete::class, 'judet');
    }

    /* ------------------ AFISARE Judet------------------*/
    public function getLocalitate(){
        return $this->hasOne(Localitati::class, 'id', 'localitate');
    }

    /* ------------------ AFISARE POSTURI APROBATE------------------*/
    public function getNumarPosturiAprobate(){
        return $this->hasOne(PosturiAprobate::class, 'ordonator_id')->where('status', '=', 1)->limit(1);
    }

    /* ------------------ AFISARE Familie Ocupationala------------------*/
    public function getFamilie(){
        return $this->hasOne(FamiliiOcupationale::class, 'id');
    }

    /* ------------------ AFISARE Tip Ordonator de Credite------------------*/
    public function getInstitutii(){
        return $this->hasMany(Institutii::class, 'ordonator');
    }


}
