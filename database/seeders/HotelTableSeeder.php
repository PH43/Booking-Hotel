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
            [
                'name'=>'Serena Apartment Đà Nẵng',
                'address'=>'63 Lý Thánh Tông Lô 63 Lý Thánh Tông , An Hải Bắc, Sơn Trà, Đà Nẵng',
                'city_id'=> '4',
                'category_id'=> '1',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'Situated in Da Nang, less than 1 km from My Khe Beach and 1.2 km from Song Han Bridge, Serena Apartment Đà Nẵng features accommodation with free WiFi, air conditioning, a shared lounge and a terrace.',
            ], 
            [
                'name'=>'New Century Hotel Cau Giay ',
                'address'=>'04 Khuc Thua Du Cau Giay, Cau Giay, Hà Nội, Việt Nam ',
                'city_id'=> '1',
                'category_id'=> '1',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'Tọa lạc tại thành phố Hà Nội, cách Bảo tàng Dân tộc học Việt Nam 1,2 km, New Hotel có quán bar, sảnh khách chung và tầm nhìn ra quang cảnh thành phố.',
            ], 
               
            
        ];
        Hotel::insert($data);

    }
}
