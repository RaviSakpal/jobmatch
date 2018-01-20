<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'category_id' => 1,
            'is_active' => 1,
            'name' => 'Ravindra',
            'email' => 'ravindra@yahoo.com',
            'password' =>bcrypt('password'),

        ]);
        $user->save();
        $user = new \App\User([
            'category_id' => 3,
            'is_active' => 1,
            'name' => 'James',
            'email' => 'james@yahoo.com',
            'password' => bcrypt('password'),

        ]);
        $user->save();
        $user = new \App\User([
            'category_id' => 3,
            'is_active' => 1,
            'name' => 'Anthony',
            'email' => 'anthony@yahoo.com',
            'password' =>  bcrypt('password'),

        ]);
        $user->save();
        $user = new \App\User([
            'category_id' => 3,
            'is_active' => 1,
            'name' => 'Catherine',
            'email' => 'catherine@yahoo.com',
            'password' => bcrypt('password'),

        ]);
        $user->save();
        $user = new \App\User([
            'category_id' => 1,
            'is_active' => 1,
            'name' => 'John',
            'email' => 'john@yahoo.com',
            'password' => bcrypt('password'),

        ]);
        $user->save();
    }
}
