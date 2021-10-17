<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'cities';


    public function Hotels()
    {
        return $this->hasMany('App\Models\Hotel', 'hotel_id', 'id');
    }
    public function rooms()
    {
        return $this->hasManyThrough('App\Models\Room', 'App\Models\Hotel','city_id', 'hotel_id', 'id');
    }
}
