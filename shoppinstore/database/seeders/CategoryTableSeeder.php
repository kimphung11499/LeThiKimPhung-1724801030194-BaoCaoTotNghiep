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
        $categoryRecords = [
            ['id'=>1,'parent_id'=>0,'section_id'=>1,'category_name'=>'Son','category_image'=>'','category_discount'=>0,
                'description'=>'','meta_keywords'=>'','status'=>1],

            ['id'=>2,'parent_id'=>1,'section_id'=>1,'category_name'=>'BenChill','category_image'=>'','category_discount'=>0,
                'description'=>'','meta_keywords'=>'','status'=>1]    
        ];

        Category::insert($categoryRecords);
    }
}
