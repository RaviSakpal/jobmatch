<?php

/**
 * Created by PhpStorm.
 * User: s3424
 * Date: 5/21/2017
 * Time: 11:15 AM
 */
class TestJobSearch extends TestCase
{

    public function test_job_search1()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile')
            ->click("Search")
            ->press("Search")
            ->see("Web Dev");
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
    public function test_job_search2()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile')
            ->click("Search")
            ->select('Art','job')
            ->press("Search")
            ->see("Design");
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
    public function test_job_search3()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile')
            ->click("Search")
            ->select('Computing','job')
            ->press("Search")
            ->see("Web Dev");
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
    public function test_job_search4()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile')
            ->click("Search")
            ->select('Sales','job')
            ->press("Search")
            ->see("Sales");
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
    public function test_job_search5()
    {
        $user = factory(App\User::class)->create([
            'password' => bcrypt('testpass123')
        ]);
        $this->visit('login')
            ->type($user->email, 'email')
            ->type('testpass123','password')
            ->press('Login')
            ->seePageIs('/myAccount')
            ->see('Edit Profile')
            ->click("Search")
            ->select('Real Estate','job')
            ->press("Search")
            ->see("Saler");
        $user1 = DB::table('users')->where('email', $user->email);
        $user1->delete();
    }
}
