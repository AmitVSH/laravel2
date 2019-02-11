<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
//use Illuminate\Foundation\Testing\DatabaseMigrations;

use Faker\Factory as Faker;

class UserRegisterTest extends DuskTestCase
{
    //use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_user_registration()
    {

        $faker = Faker::create();

        $this->browse(function (Browser $browser) use ($faker) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name',$faker->name)
                    ->type('email',$faker->email)
                    ->type('password','9552015542')
                    ->type('password_confirmation','9552015542')
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->click('#navbarDropdown')
                    ->assertSeeLink('Logout');;
        });


    }
}
