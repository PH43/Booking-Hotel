<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    public $table = 'rooms';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'price',
        'status',
        'room_number',
        'description', 
        'hotel_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'roomtype_id',
    ];

    public function scopeFilters($query)
    {
        return $query
            ->when(request()->input('hotel'), function ($query) {
                $query->where('hotel_id', request()->input('hotel'));
            })
            ->when(request()->input('room_type'), function ($query) {
                $query->where('roomtype_id', request()->input('room_type'));
            })
            ->when(request()->input('room'), function ($query) {
                $query->where('room_number', 'LIKE', '%'.request()->input('room').'%');
            });
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id');
    }

    public function roomType()
    {
        return $this->belongsTo('App\Models\RoomType', 'roomtype_id');
    }

    public function bookingRooms(){
        return $this->hasMany('App\Models\BookingRoom');
    }
    public function bookings(){
        return $this->belongsToMany('App\Models\Booking', 'booking_rooms');
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
