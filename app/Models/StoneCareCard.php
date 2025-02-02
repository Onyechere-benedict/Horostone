<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneCareCard extends Model
{
    /** @use HasFactory<\Database\Factories\StoneCareCardFactory> */
    use HasFactory;

    public function stone()
    {
        return $this->belongsTo(Stone::class);
    }
}
