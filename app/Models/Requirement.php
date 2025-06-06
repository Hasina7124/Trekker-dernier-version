<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requirement extends Model
{
    use HasFactory;

    // 1) Attributs autorisés à la création en mass-assignment
    protected $fillable = [
        'titre',
        'description',
        'priorite',
        'type',
        'cahier_charges_id',
    ];

    // 2) Relation vers le CahierCharges "parent"
    public function cahierCharges()
    {
        return $this->belongsTo(CahierCharges::class);
    }

    // 3) Relation vers les UseCases qui illustrent cette Requirement
    public function useCases()
    {
        return $this->belongsToMany(
            UseCase::class,
            'requirement_use_case',  // table pivot
            'requirement_id',
            'use_case_id'
        );
    }

    // 4) Relation vers les TestCases qui couvrent cette Requirement
    public function testCases()
    {
        return $this->belongsToMany(
            TestCase::class,
            'requirement_test_case', // table pivot
            'requirement_id',
            'test_case_id'
        );
    }

    // 5) Relation vers les Validations qui concernent cette Requirement
    public function validations()
    {
        return $this->hasMany(Validation::class);
    }
}
