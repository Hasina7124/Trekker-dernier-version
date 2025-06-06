<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CahierCharges extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'date_creation',
        'version',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function useCases()
    {
        return $this->hasMany(UseCase::class);
    }

    public function processModels()
    {
        return $this->hasMany(ProcessModel::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function planning()
    {
        return $this->hasOne(Planning::class);
    }
}
