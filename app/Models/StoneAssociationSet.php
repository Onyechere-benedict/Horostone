<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneAssociationSet extends Model
{
    /** @use HasFactory<\Database\Factories\StoneAssociationSetFactory> */
    use HasFactory;

    public function stone()
    {
        return $this->belongsTo(Stone::class);
    }
}
