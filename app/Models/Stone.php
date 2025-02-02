<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{
    /** @use HasFactory<\Database\Factories\StoneFactory> */
    use HasFactory;

    public function propertySet()
    {
        return $this->hasOne(StonePropertySet::class);
    }

    public function stonePropertySet()
    {
        return $this->hasOne(StonePropertySet::class);
    }

    public function associationSet()
    {
        return $this->hasOne(StoneAssociationSet::class);
    }

    public function stoneAssociationSet()
    {
        return $this->hasOne(StoneAssociationSet::class);
    }

    public function miningSitesSet()
    {
        return $this->hasOne(StoneMiningSitesSet::class);
    }

    public function stoneMiningSitesSet()
    {
        return $this->hasOne(StoneMiningSitesSet::class);
    }

    public function careCard()
    {
        return $this->hasOne(StoneCareCard::class);
    }

    public function stoneCareCard()
    {
        return $this->hasOne(StoneCareCard::class);
    }

    public function affirmationSet()
    {
        return $this->hasOne(StoneAffirmationSet::class);
    }

    public function stoneAffirmationSet()
    {
        return $this->hasOne(StoneAffirmationSet::class);
    }


    //NOTE: The relationships are duplicated for a good reason.
    // The first method is for casual use in template files, so you won't have something like $stone->stoneAssociationSet,
    // instead you'll have $stone->associationSet
    //
    // While the second one is for the definition of the actual relationship, used by Eloquent in factories and what not.
}
