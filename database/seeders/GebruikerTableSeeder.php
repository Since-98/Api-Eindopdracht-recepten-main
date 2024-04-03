<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GebruikerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Sample data for gebruikers
          $gebruikers = [
            [
                'naam' => 'John Doe',
                'recept_id' => 1,
                'telefoon' => '123456789',
                'email' => 'john@example.com',
            ],
            [
                'naam' => 'Jane Smith',
                'recept_id' => 2,
                'telefoon' => '987654321',
                'email' => 'jane@example.com',
            ],
            // Add more sample data as needed
        ];

        // Insert data into gebruikers table

        }
    }

