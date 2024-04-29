<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Cluster::factory(10)->create();
    }
}
