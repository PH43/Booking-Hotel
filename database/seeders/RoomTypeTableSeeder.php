<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type'=>'giường đôi'],
            ['type'=>'giường đơn'],
            
        ];
        RoomType::insert($data);
    }
}
