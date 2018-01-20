<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 5/27/2017
 * Time: 8:17 PM
 */
class TestSearchJob extends TestCase
{
    //Test Search Function with Computing
    public function testCreteJob1()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->visit('search')
            ->select('Computing','job')
            ->press('Search')
            ->See('Web Dev');
    }
    //Test Search Function with Art
    public function testCreteJob2()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->visit('search')
            ->select('Art','job')
            ->press('Search')
            ->See('Design');
    }
    //Test Search function with Sales
    public function testCreteJob3()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->visit('search')
            ->select('Sales','job')
            ->press('Search')
            ->See('Sales');
    }
    //Test Search Function with Real Estate
    public function testCreteJob4()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->visit('search')
            ->select('Real Estate','job')
            ->press('Search')
            ->See('Real');
    }
}
