<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingRoom extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'booking_rooms';

    public function booking(){
        return $this->belongsTo('App\Models\Booking');
    }
     public function room(){
        return $this->belongsTo('App\Models\Room');
    }
    public function booking_services_details(){
        return $this->hasMany('App\Models\Booking_services_details');
    }
}
