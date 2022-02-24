<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class, 10)->create();
        // factory(App\Value::class, 1)->create();
    }
}
