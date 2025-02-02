<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StonePropertySet extends Model
{
    /** @use HasFactory<\Database\Factories\StonePropertySetFactory> */
    use HasFactory;

    public function stone()
    {
        return $this->belongsTo(Stone::class);
    }
}
