<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class TestRegisterPage extends TestCase
{
    //test Response of register Page
    public function testResponse()
    {
        $this->visit('/register');
        $this->assertResponseStatus(200);
    }
    //test access register page by URL
    public function test_access()
    {
        $this->visit('/register')
            ->see('Name');
    }
    //test create new account
    public function test_create1()
    {
        $this->visit('/register')
            ->type('Huy', 'name')
            ->type('huy@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('Register')
            ->see('My Account');
        $user = DB::table('users')->where('name', 'Huy');
            $user->delete();
    }
    //Test used email has been taken
    public function test_create2()
    {
        $this->visit('/register')
            ->type('Huy', 'name')
            ->type('usedemail@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('Register')
            ->see('The email has already been taken.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }
    //Test invalid password
    public function test_create3()
    {
        $this->visit('/register')
            ->type('Huy', 'name')
            ->type('huy@gmail.com', 'email')
            ->type('123', 'password')
            ->type('123', 'password_confirmation')
            ->press('Register')
            ->see('The password must be at least 6 characters.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }
    //Test miss match password
    public function test_create4()
    {
        $this->visit('/register')
            ->type('Huy', 'name')
            ->type('huy@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123', 'password_confirmation')
            ->press('Register')
            ->see('The password confirmation does not match.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }
    //Test no password added
    public function test_create5()
    {
        $this->visit('/register')
            ->type('Huy', 'name')
            ->type('huy@gmail.com', 'email')
            ->press('Register')
            ->see('The password field is required.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }
    //Test no name added
    public function test_create6()
    {
        $this->visit('/register')
            ->type('', 'name')
            ->type('huy@gmail.com', 'email')
            ->press('Register')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->see('The name field is required.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }
    //Test no email added
    public function test_create7()
    {
        $this->visit('/register')
            ->type('', 'name')
            ->type('', 'email')
            ->press('Register')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->see('The email field is required.');
        $user = DB::table('users')->where('name', 'Huy');
        $user->delete();
    }

}
