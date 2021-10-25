<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgnisations extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'line_of_buisness_id', 'email', 'mobile_no', 'website', 'address_1', 'address_2', 'country_id', 'state_id', 'city_id', 'zip_code', 'created_by'];
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
