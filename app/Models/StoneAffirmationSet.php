<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneAffirmationSet extends Model
{
    /** @use HasFactory<\Database\Factories\StoneAffirmationSetFactory> */
    use HasFactory;

    public function stone()
    {
        return $this->belongsTo(Stone::class);
    }
}
