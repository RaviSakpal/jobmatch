<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 4/4/2017
 * Time: 9:10 PM
 */
class TestResetPassword extends TestCase
{
    public function testResponse()
    {
        $this->visit('/password/reset');
        $this->assertResponseStatus(200);
    }
    public function test_access()
    {
        $this->visit('/password/reset')
            ->see('Reset Password')
            ->seePageIs('/password/reset');
    }
//    public function test_reset1()
//    {
//        $this->visit('/password/reset')
//            ->type('forget@gmail.com', 'email')
//            ->press('Send Password Reset Link')
//            ->see('Reset Password email is sent to your email');
//    }
    public function test_reset2()
    {
        $this->visit('/password/reset')
            ->type('', 'email')
            ->press('Send Password Reset Link')
            ->see('The email field is required.');
    }
    public function test_reset3()
    {
        $this->visit('/password/reset')
            ->type('a@gmail.com', 'email')
            ->press('Send Password Reset Link')
            ->see('We can\'t find a user with that e-mail address.');
    }
}
