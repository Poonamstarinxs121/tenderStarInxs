<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert sample users
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'department' => 'IT',
                'userType' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'department' => 'Sales',
                'userType' => 'regular',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Insert sample companies
        DB::table('companies')->insert([
            [
                'name' => 'Tech Solutions Inc',
                'email' => 'info@techsolutions.com',
                'phone' => '+1234567890',
                'address' => '123 Tech Street',
                'city' => 'New York',
                'state' => 'NY',
                'country' => 'USA',
                'postal_code' => '10001',
                'description' => 'Leading technology solutions provider',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Global Industries Ltd',
                'email' => 'contact@globalindustries.com',
                'phone' => '+1987654321',
                'address' => '456 Industry Avenue',
                'city' => 'London',
                'state' => 'Greater London',
                'country' => 'UK',
                'postal_code' => 'SW1A 1AA',
                'description' => 'International manufacturing company',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Insert sample OEMs
        DB::table('oems')->insert([
            [
                'company_name' => 'Auto Parts Manufacturing',
                'contact_person' => 'John Smith',
                'phone_number' => '+1122334455',
                'email' => 'john@autoparts.com',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'Electronics Components Ltd',
                'contact_person' => 'Sarah Johnson',
                'phone_number' => '+9988776655',
                'email' => 'sarah@electronics.com',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
