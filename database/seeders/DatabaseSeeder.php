<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nama'      => 'Dr. Adip',
            'ttl'       => 'Tarakan, 10 Oktober 1941',
            'alamat'    => 'Tarakan, Kalimantan Utara',
            'no_hp'     => '085123456789',
            'email'     => 'adip@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'dokter'
        ]);
        User::create([
            'nama'      => 'Dr. Darpon',
            'ttl'       => 'Sidoarjo, 16 Februari 1991',
            'alamat'    => 'Tarakan, Kalimantan Utara',
            'no_hp'     => '085123456789',
            'email'     => 'darpon@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'dokter'
        ]);
        User::create([
            'nama'      => 'Dr. Rehan',
            'ttl'       => 'Tarakan, 23 Januari 1928',
            'alamat'    => 'Tarakan, Kalimantan Utara',
            'no_hp'     => '085123456789',
            'email'     => 'rehan@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'dokter'
        ]);
    }
}
