<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
    protected $table = 'arrondissement';
    protected $primaryKey = 'id_arrond';
    public $timestamps = true;

    public function commune()
    {
        return $this->belongsTo('App\Commune', 'id_com', 'id_com');
    }
    // Ajoutez d'autres relations si nécessaire
}
