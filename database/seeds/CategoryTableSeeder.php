<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Iphones',
            'slug' => 'iphones'
        ]);
        Category::create([
            'name' => 'Samsungs',
            'slug' => 'samsungs'
        ]);
        Category::create([
            'name' => 'Huaweis',
            'slug' => 'huaweis'
        ]);
        Category::create([
            'name' => 'Tablets',
            'slug' => 'tablets'
        ]);
        Category::create([
            'name' => 'Redmis',
            'slug' => 'redmis'
        ]);
        Category::create([
            'name' => 'Oppos',
            'slug' => 'Oppos'
        ]);

    }
}
