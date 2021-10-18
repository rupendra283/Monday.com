<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgnisations extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Orgnisations
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lineOFBuisness()
    {
        return $this->belongsTo(LineOfBuisness::class);
    }
}
