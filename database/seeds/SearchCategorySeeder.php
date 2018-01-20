<?php
/**
 * Created by PhpStorm.
 * User: Abdullah
 * Date: 28/5/17
 * Time: 10:00 AM
 */

use Illuminate\Database\Seeder;

class SearchCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $jobcategory = new \App\Jobcategory([
                'id' => 1,
                'category_name' => 'Computing',
            ]);
            $jobcategory->save();

            $jobcategory = new \App\Jobcategory([
                'id' => 2,
                'category_name' => 'Art',
            ]);
            $jobcategory->save();
        $jobcategory = new \App\Jobcategory([
            'id' => 3,
            'category_name' => 'Sales',
        ]);
        $jobcategory->save();

        $jobcategory = new \App\Jobcategory([
            'id' => 4,
            'category_name' => 'Real Estate',
        ]);
        $jobcategory->save();
        }
}
