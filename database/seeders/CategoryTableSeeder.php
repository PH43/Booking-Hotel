<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category'=>'Khách sạn 5 star'],
            ['category'=>'Khách sạn 4 star'],
            ['category'=>'Khách sạn 3 star'],
            ['category'=>'Nhà nghỉ cao cấp'],           
            ['category'=>'Nhà nghỉ bình dân'],            
            ['category'=>'Ký túc xá'],           
        ];
        Category::insert($data);
    }
}
