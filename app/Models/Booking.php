<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'booking_date',
        
    ];

    protected $fillable = [
        'user_id',
        'booking_date',
        'qty_room', 
        'coupon_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    // public function getBookingDateAttribute($value)
    // {
    //     return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    // }

    // public function setBookingDateAttribute($value)
    // {
    //     $this->attributes['booking_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    // }


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function rooms(){
        return $this->belongsToMany('App\Models\Room');
    }
    
    public function coupon(){
        return $this->belongsTo('App\Models\Coupon');
    }
    public function bookingRooms(){
        return $this->hasMany('App\Models\BookingRoom');
    }
}
