<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'name' => 'administrator',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'employer',

        ]);
        $category->save();
        $category = new \App\Category([
            'name' => 'jobseeker',

        ]);
        $category->save();
    }
}
