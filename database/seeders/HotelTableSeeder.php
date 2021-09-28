<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $data = [
            [
                'name'=>'Serena Apartment Đà Nẵng',
                'address'=>'63 Lý Thánh Tông Lô 63 Lý Thánh Tông , An Hải Bắc, Sơn Trà, Đà Nẵng',
                'city_id'=>'4',
                'category_id'=>'1',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'Situated in Da Nang, less than 1 km from My Khe Beach and 1.2 km from Song Han Bridge, Serena Apartment Đà Nẵng features accommodation with free WiFi, air conditioning, a shared lounge and a terrace.',
            ],
            [
                'name'=>'Silverland Yen Hotel',
                'address'=>'73 - 75 Thu Khoa Huan, Quận 1, TP. Hồ Chí Minh',
                'city_id'=>'10',
                'category_id'=>'2',
                'website'=>'https://www.booking.com/hotel/vn',
                'description'=>'Tọa lạc trên đường Thủ Khoa Huân, Silverland Yen Hotel nằm cách Chợ Bến Thành chỉ 6 phút đi bộ. Khách sạn có bể sục nước ấm ngoài trời và tiện nghi phòng xông hơi khô/phòng xông hơi ướt.',
            ],

            
        ];
        Hotel::insert($data);

    }
}
