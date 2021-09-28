<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['city'=>'Hà Nội'],
            ['city'=>'Quảng Bình'],
            ['city'=>'Quảng Trị'],
            ['city'=>'Đà Nẵng'],           
            ['city'=>'Huế'],            
            ['city'=>'Quảng Nam'],           
            ['city'=>'Quảng Ngãi'],
            ['city'=>'Bình Định '],           
            ['city'=>'Phú Yên'],
            ['city'=>'Hồ Chí Minh'],
        ];
        City::insert($data);
    }
}
