<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(gta\User::class, 100)->create();
        // $this->call(UsersTableSeeder::class);
        // factory(gta\User::class, 20)->create()->each(function (gta\User $user){


            // factory(gta\Post::class)
        //     ->times(50)
        //     ->create([
        //         'user_id'=>$user->id
        //         ]);

        // });
    }
}
