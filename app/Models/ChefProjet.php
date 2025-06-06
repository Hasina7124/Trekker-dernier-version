<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Validation;

class ChefProjet extends Model
{
    protected $fillable = ['role'];

    public function requirement () 
    {
        return $this->HasMany(Requirement::class);
    }

    public function realiseValidation ()
    {
        return $this->hasMany(Validation::class);
    }
}
