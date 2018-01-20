<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 4/4/2017
 * Time: 8:49 PM
 */
class TestAboutPage extends TestCase
{
    public function testResponse()
    {
        $this->visit('/about');
        $this->assertResponseStatus(200);
    }
    public function test_access()
    {
        $this->visit('/about')
            ->see('About')
            ->seePageIs('/about');
    }
    public function testHomebutton()
    {
        $this->visit('/')
            ->click('Home')
            ->seePageIs('/')
            ->see('Welcome');
    }
    public function testLogininNavigation()
    {
        $this->visit('/')
            ->click('Login')
            ->seePageIs('/login')
            ->see('Login');
    }
    public function testRegisinNavigation()
    {
        $this->visit('/')
            ->click('Register')
            ->seePageIs('register')
            ->see('Register');
    }
//    public function testAboutbutton()
//    {
//        $this->visit('/about')
//            ->click('About')
//            ->seePageIs('/about')
//            ->see('About');
//    }
}
