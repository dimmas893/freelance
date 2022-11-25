<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "states";
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'state_id';

    /**
     * Get the states of the country.
     */
    public function country()
    {
        return $this->belongsTo(State::class, 'state_id', 'country_id');
    }

    /**
     * Get the states of the country.
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'city_id', 'state_id');
    }
}
