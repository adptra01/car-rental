<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

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
        $this->call([
            CategoriesSeeder::class
        ]);
        
        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('Idcard', $fileName, 'public');

        User::insert([
            [
            'name' => 'Test User',
            'email' => 'user@testing.com',
            'isAdmin' => 0,
            'password' => bcrypt('testing'),
            'address' => 'Testing address',
            'idcard' => $filePath,
            'telp' => 123456780,
            ],
            [
            'name' => 'Test admin',
            'email' => 'admin@testing.com',
            'isAdmin' => 1,
            'password' => bcrypt('testing'),
            'address' => 'Testing address',
            'idcard' => $filePath,
            'telp' => 123456780,
            ]
        ]);
    }
}
