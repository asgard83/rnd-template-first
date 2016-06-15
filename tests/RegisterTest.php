<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    public function testCreateNewRegister()
    {

        $randomString = str_random(10);

        $this->visit('/register/create')
              ->type($randomString, 'register_name')
              ->press('Create')
              ->seePageIs('/register');
    }
}