<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipOrdonatori extends Model
{
    use HasFactory;

    protected $table="tip_ordonatori";

    // Anulare coloane created_at si updated_at
    public $timestamps = false;
}
