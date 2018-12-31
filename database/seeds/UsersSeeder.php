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
        factory(User::class)->create([
            'name' => 'GUEST',
            'email' => config('app.demo_user'),
            'email_verified_at' => now(),
            'password' => bcrypt(config('app.demo_passwd')),
        ]);
    }
}
