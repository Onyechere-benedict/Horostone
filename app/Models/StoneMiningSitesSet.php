<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneMiningSitesSet extends Model
{
    /** @use HasFactory<\Database\Factories\StoneMiningSitesSetFactory> */
    use HasFactory;

    public function stone()
    {
        return $this->belongsTo(Stone::class);
    }
}
