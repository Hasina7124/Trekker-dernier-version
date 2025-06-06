<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Validation;

class Client extends User
{
    protected $fillable = ['secteurActive'];

    public function receptionneValidation () 
    {
        return $this->hasMany(Validation::class);
    }

    public function redigeCahierCharges()
    {
        return $this->hasMany(CahierCharges::class);
    }
}
