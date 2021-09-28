<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomTableSeeder extends Seeder
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
                'price'=>'120000',
                'status'=>'Trống',
                'room_number'=>'20',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'1',
                'roomtype_id'=>'1',
            ],
            [
                'price'=>'260000',
                'status'=>'Trống',
                'room_number'=>'25',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'2',
                'roomtype_id'=>'1',
            ],


            
        ];
        Room::insert($data);
    }
}
