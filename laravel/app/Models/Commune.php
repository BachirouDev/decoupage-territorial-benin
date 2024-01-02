<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'commune';
    protected $primaryKey = 'id_com';
    public $timestamps = true;

    public function departement()
    {
        return $this->belongsTo('App\Departement', 'id_dep', 'id_dep');
    }
    // Ajoutez d'autres relations si nécessaire
}
