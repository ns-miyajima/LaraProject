<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficeTranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OfficeTran::factory()->count(10)->create();

    }
}
