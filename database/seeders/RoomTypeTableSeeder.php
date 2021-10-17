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
            ['type'=>'Standard (STD)', 'bed' => '2',  'capactity' => '2'],
            ['type'=>'Superior (SUP)', 'bed' => '2',  'capactity' => '2'],
            ['type'=>'Deluxe (DLX)', 'bed' => '2',  'capactity' => '3'],
            ['type'=>'Suite (SUT)', 'bed' => '1',  'capactity' => '3'],
            ['type'=>'Connecting room','bed' => '4',  'capactity' => '8'],
        ];
        RoomType::insert($data);
    }
}
