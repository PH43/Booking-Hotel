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
                'status'=>'1',
                'room_number'=>'1',
                'description'=>'dfshdifhsduif',
                'qty' => 10,
                'discount' => 20,
                'area' => 50,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'1',
                'roomtype_id'=>'1',
            ],
            [
                'price'=>'260000',
                'status'=>'1',
                'room_number'=>'2',
                'description'=>'dfshdifhsduif',
                'qty' => 15,
                'discount' => 25,
                'area' => 60,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'2',
                'roomtype_id'=>'3',
            ],
            [
                'price'=>'170000',
                'status'=>'1',
                'room_number'=>'3',
                'description'=>'dfshdifhsduif',
                'qty' => 10,
                'discount' => 20,
                'area' => 50,
                'view' => 'Nhìn ra biển',
                'hotel_id'=>'2',
                'roomtype_id'=>'2',
            ],
            [
                'price'=>'240000',
                'status'=>'1',
                'room_number'=>'4',
                'description'=>'dfshdifhsduif',
                'qty' => 10,
                'discount' => 'null',
                'area' => 50,
                'view' => 'tựa núi nhìn sông',
                'hotel_id'=>'2',
                'roomtype_id'=>'2',
            ],

            [
                'price'=>'180000',
                'status'=>'1',
                'room_number'=>'5',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'1',
                'roomtype_id'=>'1',
            ],
            [
                'price'=>'350000',
                'status'=>'1',
                'room_number'=>'6',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'2',
                'roomtype_id'=>'1',
            ],

            [
                'price'=>'120000',
                'status'=>'1',
                'room_number'=>'7',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'1',
                'roomtype_id'=>'1',
            ],
            [
                'price'=>'260000',
                'status'=>'1',
                'room_number'=>'8',
                'description'=>'dfshdifhsduif',
                'hotel_id'=>'2',
                'roomtype_id'=>'1',
            ],



            
        ];
        Room::insert($data);
    }
}
