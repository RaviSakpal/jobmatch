<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 4/25/2017
 * Time: 8:12 PM
 */
class TestDatabase extends TestCase
{
    public function testDatabase1()
    {
        $user = factory(App\User::class)->create([
            'email' => 'testdatase@gmail.com',
        ]);
        $this->seeInDatabase('users', ['email' => 'testdatase@gmail.com']);
        $user1 = DB::table('users')->where('email', 'testdatase@gmail.com');
        $user1->delete();
    }
    public function testDatabase2()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Test Database',
        ]);
        $this->seeInDatabase('users', ['name' => 'Test Database']);
        $user1 = DB::table('users')->where('name', 'Test Database');
        $user1->delete();
    }
    public function testDatabase3()
    {
        $user = factory(App\User::class)->create([
            'password' => '123456',
        ]);
        $this->seeInDatabase('users', ['password' => '123456']);
        $user1 = DB::table('users')->where('password', '123456');
        $user1->delete();
    }
}
