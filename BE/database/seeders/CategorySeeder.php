<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['category' => 'Fiction'],
            ['category' => 'Horror'],
            ['category' => 'Novel'],
            ['category' => 'Adventure'],
        ];

        foreach ($category as $categ) {
            Category::create($categ);
        }
        
    }
}
