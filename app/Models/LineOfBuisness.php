<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineOfBuisness extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    /**
     * Get all of the comments for the LineOfBuisness
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lineOfBuisness()
    {
        return $this->hasMany(Orgnisations::class);
    }
}
