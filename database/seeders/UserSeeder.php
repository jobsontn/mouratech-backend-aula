<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jobson Tenório do Nascimento',
            'email' => 'jobsontenorio@gmail.com',
            'password' => bcrypt('api123456'),
        ]);

        $csvFile = fopen(base_path("database/users.csv"), "r");
        $firstline = FALSE;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "name"=> $data["0"],
                    "email"=> $data["1"],
                    "password"=> bcrypt('api123456'),
                ]);
            }
            $firstline = FALSE;
        }
        fclose($csvFile);
    }
}
