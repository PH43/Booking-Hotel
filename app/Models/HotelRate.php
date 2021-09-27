<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRate extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'hotel_rates';

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
}
