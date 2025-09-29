<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('customers')->insert([
            'first_name' => 'Olivia',
            'last_name' => 'Carter',
            'email' => 'olivia.carter@example.com',
            'phone' => '+1 415-555-0101',
            'job_title' => 'Account Executive',
            'department' => 'Sales',
            'city' => 'San Francisco',
            'country' => 'United States',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
