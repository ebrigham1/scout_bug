<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();
        for($i = 1; $i <= 100; $i++) {
            $user = $users->random();
            factory(\App\Post::class)->create(['user_id' => $user->id]);
        }
    }
}
