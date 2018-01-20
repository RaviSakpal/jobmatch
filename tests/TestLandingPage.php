<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestLandingPage extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    //Test response of Landing Page
    public function testResponse()
    {
        $this->visit('/');
        $this->assertResponseStatus(200);
    }
    //Test Home page is Landing page
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Welcome');
    }
    //Test Sign in button of Landing page
    public function testLogin()
    {
        $this->visit('/')
            ->click('Log In')
            ->seePageIs('/login')
            ->see('Login');
    }
    //Test Sign up button of Landing Page
    public function testSignup()
    {
        $this->visit('/')
            ->click('Register as Job Seejer')
            ->seePageIs('/register')
            ->see('Register');
    }
    public function testSignup2()
    {
        $this->visit('/')
            ->click('Register as Employer')
            ->seePageIs('/register')
            ->see('Register');
    }
    public function testHomebutton()
    {
        $this->visit('/')
            ->click('Home')
            ->seePageIs('/')
            ->see('Welcome');
    }
    public function testAboutbutton()
    {
        $this->visit('/')
            ->click('About')
            ->seePageIs('/about')
            ->see('About');
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
}
