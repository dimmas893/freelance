<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "countries";
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'country_id';

    /**
     * Get the states of the country.
     */
    public function states()
    {
        return $this->hasMany(State::class, 'state_id', 'country_id');
    }
}
