<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = \App\Country::all();
        for($i = 1; $i <= 10; $i++) {
            $country = $countries->random();
            factory(\App\User::class)->create(['country_id' => $country->id]);
        }
    }
}
