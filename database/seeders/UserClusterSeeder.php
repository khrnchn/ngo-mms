<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UserCluster::factory(10)->create();
    }
}
