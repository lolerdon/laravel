<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectsAndSitesData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Projects
        DB::table('projects')->insert([
            [
                'project_code' => 'PRJ001',
                'name' => 'Project Alpha',
                'status' => 'active',
                'start_date' => '2023-01-15',
            ],
            [
                'project_code' => 'PRJ002',
                'name' => 'Project Beta',
                'status' => 'planned',
                'start_date' => null,
            ],
            [
                'project_code' => 'PRJ003',
                'name' => 'Project Gamma',
                'status' => 'completed',
                'start_date' => '2022-05-20',
            ],
        ]);

        DB::table("sites")->insert([
            [
                'site_code' => 'SITE001',
                'name' => 'Site One',
                'city' => 'New York',
                'country' => 'US',
            ],
            [
                'site_code' => 'SITE002',
                'name' => 'Site Two',
                'city' => 'London',
                'country' => 'GB',
            ],
            [
                'site_code' => 'SITE003',
                'name' => 'Site Three',
                'city' => 'Tokyo',
                'country' => 'JP',
            ],
        ]);
    }
}
