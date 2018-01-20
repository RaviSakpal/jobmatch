<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSession()
    {
        $user = factory(App\User::class)->make();

        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/about')
            ->dontSee("Login");
    }
}