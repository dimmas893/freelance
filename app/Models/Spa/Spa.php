<?php

namespace App\Models\Spa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region\City;
use App\Models\Coupon\Coupon;
use App\Models\User;

class Spa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "places";

    protected $appends= ['avg_rating'];
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'place_id';

    /**
     * Get the city of spa.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    /**
     * Get the city of spa.
     */
    public function photos()
    {
        return $this->hasMany(Photo::class, 'place_id', 'place_id');
    }

    /**
     * Get the list of spa.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'rel_place_cat', 'place_id', 'cat_id');
    }

    /**
     * Get the list of spa.
     */
    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_places', 'place_id', 'coupon_id');
    }

    /**
     * Get the list of spa.
     */
    public function favorites()
    {
        return $this->belongsToMany(User::class, 'rel_favorites', 'place_id', 'userid');
    }

    /**
     * Get the list of spa.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'place_id', 'place_id');
    }

    public function getAvgRatingAttribute()
    {
        return $this->reviews->average('rating');
    }
}
