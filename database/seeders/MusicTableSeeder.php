<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Music::factory()->count(20)->create();
    }
}
