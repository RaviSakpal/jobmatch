<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class TestJob extends TestCase
{
    //Test Valid Job information 1
    public function testCreteJob1()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Networking','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Networking'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Networking');
            $job->delete();
    }
    //Test Valid Job information 2
    public function testCreteJob2()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Networking','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Computing','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Networking'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Networking');
        $job->delete();
    }
    //Test Valid Job information 3
    public function testCreteJob3()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Networking','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Sales','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Networking'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Networking');
        $job->delete();
    }
    //Test Valid Job information 4
    public function testCreteJob4()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Networking','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Real Estate','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Networking'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Networking');
        $job->delete();
    }
    //Test Job's name with Number
    public function testCreteJob5()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Networking1','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Networking1'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Networking1');
        $job->delete();
    }
    //Test Job Name with Space
    public function testCreteJob6()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
    //Test Company with number
    public function testCreteJob7()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('3','job_rank')
            ->type('RMIT1','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
    //Test Company with space
    public function testCreteJob8()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('1','job_rank')
            ->type('RMI T','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
    //Company Name with special character
    public function testCreteJob9()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('1','job_rank')
            ->type('RMIT @$%^^','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
    //Test Job Description with number
    public function testCreteJob10()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('123123 Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
    //Test Company Description with number
    public function testCreteJob11()
    {
        $this->visit('login')
            ->type('huy1234@gmail.com', 'email')
            ->type('password','password')
            ->press('Login')
            ->see('Post a new job')
            ->click('Post a new job')
            ->seePageIs('/myAccountEmployer')
            ->type('Help Desk','job_name')
            ->type('1','job_rank')
            ->type('RMIT','job_company')
            ->type('Working on Company Netwk. Make sure all computer is connect together within network and fix if there are problems','job_des')
            ->type('123213 RMIT is university with multiple building locate near melbourne central station.','company_des')
            ->select('Art','jobcategory_id')
            ->press('Create')
            ->seeInDatabase('joblists',['job_name'=> 'Help Desk'])
            ->seePageIs('createJob');
        $job = DB::table('joblists')->where('job_name', 'Help Desk');
        $job->delete();
    }
}
