<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Planning extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'description',
        'cahier_charges_id',
    ];

    public function cahierCharges()
    {
        return $this->belongsTo(CahierCharges::class);
    }

    public function taches()
    {
        return $this->hasMany(Tache::class);
    }
}
