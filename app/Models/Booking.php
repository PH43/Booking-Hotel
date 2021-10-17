<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'bookings';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        
        
    ];

    protected $fillable = [
        'user_id',
        'booking_date',
        'qty_room', 
        'status',
        'cancel_reason',
        'payment_status',
        'coupon_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];



    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
    public function rooms(){
        return $this->belongsToMany('App\Models\Room', 'booking_rooms');
    }
    
    public function coupon(){
        return $this->belongsTo('App\Models\Coupon');
    }
    public function bookingRooms(){
        return $this->hasMany('App\Models\BookingRoom');
        
    }
    public function bookingInfo(){
        return $this->belongsTo('App\Models\BookingInfo');
    }

}
