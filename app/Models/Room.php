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
        'name',
        'hotel_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'roomtype_id',
    ];

     

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
}
