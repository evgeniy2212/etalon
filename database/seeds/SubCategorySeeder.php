<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub1 = new SubCategory(['name' => 'Фенікс', 'icon' => 'img/1.jpg']);
        $sub2 = new SubCategory(['name' => 'Кордаф', 'icon' => 'img/2.png']);
        $sub3 = new SubCategory(['name' => 'Формет', 'icon' => 'img/3.jpg']);
        $sub4 = new SubCategory(['name' => 'Новий стиль', 'icon' => 'img/4.jpg']);
        $sub5 = new SubCategory(['name' => 'Ваш стиль', 'icon' => 'img/5.png']);
        $sub6 = new SubCategory(['name' => 'Родос', 'icon' => 'img/6.png']);
        $sub7 = new SubCategory(['name' => 'Неман', 'icon' => 'img/7.jpg']);
        $sub8 = new SubCategory(['name' => 'Хвоя', 'icon' => 'img/8.jpg']);
        $sub9 = new SubCategory(['name' => 'Оміс', 'icon' => 'img/9.png']);
        $sub10 = new SubCategory(['name' => 'Verto', 'icon' => 'img/10.png']);
        $sub11 = new SubCategory(['name' => 'Cortex Alumo', 'icon' => 'img/11.jpg']);
        $sub12 = new SubCategory(['name' => 'Terminus', 'icon' => 'img/12.png']);

        $sub1->save();
        $sub2->save();
        $sub3->save();
        $sub4->save();
        $sub5->save();
        $sub6->save();
        $sub7->save();
        $sub8->save();
        $sub9->save();
        $sub10->save();
        $sub11->save();
        $sub12->save();

    }
}
