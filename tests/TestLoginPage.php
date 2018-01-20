<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 4/4/2017
 * Time: 8:12 PM
 */
class TestLoginPage extends TestCase
{
    public function test_response()
    {
        $this->visit('/login');
        $this->assertResponseStatus(200);
    }
    public function test_access()
    {
        $this->visit('/login')
            ->see('Login')
            ->seePageIs('/login');
    }
    //valid email and password
    public function test_login1()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile');
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
    //invalid email with valid password
    public function test_login2()
    {
        $this->visit('login')
            ->type('testlogin1@gmail.com', 'email')
            ->type('123456','password')
            ->press('Login')
            ->see('These credentials do not match our records.');
    }
    //no email with valid password
    public function test_login3()
    {
        $this->visit('login')
            ->type('', 'email')
            ->type('123456','password')
            ->press('Login')
            ->see('The email field is required.');
    }
    //valid email with invalid password
    public function test_login4()
    {
        $this->visit('login')
            ->type('testlogin@gmail.com', 'email')
            ->type('12345678','password')
            ->press('Login')
            ->see('These credentials do not match our records.');
    }
    //valid email with no password
    public function test_login5()
    {
        $this->visit('login')
            ->type('testlogin@gmail.com', 'email')
            ->type('','password')
            ->press('Login')
            ->see('The password field is required.');
    }
    //invalid email with no password
    public function test_login6()
    {
        $this->visit('login')
            ->type('testlogin1@gmail.com', 'email')
            ->type('','password')
            ->press('Login')
            ->see('The password field is required.');
    }
    //no email and no password
    public function test_login7()
    {
        $this->visit('login')
            ->type('', 'email')
            ->type('','password')
            ->press('Login')
            ->see('The password field is required.' &&'The password field is required.');
    }
    //invalid email with invalid password
    public function test_login8()
    {
        $this->visit('login')
            ->type('testlogin1@gmail.com', 'email')
            ->type('1','password')
            ->press('Login')
            ->see('These credentials do not match our records.');
    }
}
