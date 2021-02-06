<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliiOcupationale extends Model
{
    use HasFactory;
    protected $table="familii_ocupationale";

    // Anulare coloane created_at si updated_at
    public $timestamps = false;

    public function getOrdonatori(){
        return $this->hasMany(Ordonatori::class, 'familie', 'id');
    }
}
