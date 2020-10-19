<?php

use App\User;
use App\Membership;
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
        factory(Membership::class, 2)->create();
        factory(User::class, 50)->create();
    }
}
