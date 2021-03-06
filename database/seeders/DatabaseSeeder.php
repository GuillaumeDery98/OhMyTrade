<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        if (env('APP_ENV') == 'local' || env('APP_ENV') == 'development') {
            \App\Models\User::factory(1)->asTestUser()->create();
        }
    }
}
