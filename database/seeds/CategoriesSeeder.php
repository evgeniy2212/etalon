<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category(['name' => 'Вхідні двері']);

        $category1->save();

        $category2 = new Category(['name' => 'Міжкімнатні двері']);

        $category2->save();

        $category3 = new Category(['name' => 'Вікна']);

        $category3->save();

    }
}
