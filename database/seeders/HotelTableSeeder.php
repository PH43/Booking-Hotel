<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use Symfony\Polyfill\Ctype\Ctype;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $city= City::pluck('id');
        $category= Category::pluck('id');

        $data = [
            
                'name'=>'Serena Apartment Đà Nẵng',
                'address'=>'63 Lý Thánh Tông Lô 63 Lý Thánh Tông , An Hải Bắc, Sơn Trà, Đà Nẵng',
                'city_id'=> '1',
                'category_id'=> '1',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'Situated in Da Nang, less than 1 km from My Khe Beach and 1.2 km from Song Han Bridge, Serena Apartment Đà Nẵng features accommodation with free WiFi, air conditioning, a shared lounge and a terrace.',
                'star'=> '4',
        ];
        Hotel::insert($data);

    }
}
