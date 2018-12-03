<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
    }
}
