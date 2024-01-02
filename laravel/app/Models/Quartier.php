<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    protected $table = 'quartier';
    protected $primaryKey = 'id_quart';
    public $timestamps = true;

    public function arrondissement()
    {
        return $this->belongsTo('App\Arrondissement', 'id_arrond', 'id_arrond');
    }
    // Ajoutez d'autres relations si nécessaire
}
