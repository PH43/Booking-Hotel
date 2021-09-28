<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'hotel_id', 'id');
    }
    public function hotelRates()
    {
        return $this->hasMany('App\Models\HotelRate', 'hotel_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}