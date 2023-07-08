<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\obat;

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
            'alamat'    => 'Sidoarjo, Jawa Timur',
            'no_hp'     => '085123456789',
            'email'     => 'darpon@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'dokter'
        ]);
        User::create([
            'nama'      => 'Dr. Rehan',
            'ttl'       => 'Malang, 23 Januari 1928',
            'alamat'    => 'Malang, Jawa Timur',
            'no_hp'     => '085123456789',
            'email'     => 'rehan@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'dokter'
        ]);

        User::create([
            'nama'      => 'Yoga Adhi',
            'ttl'       => 'Kudus, 11 Februari 2000',
            'alamat'    => 'Kudus, Jawa Tengah',
            'no_hp'     => '085111111111',
            'email'     => 'yoga@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'user'
        ]);
        User::create([
            'nama'      => 'Andito Nugroho',
            'ttl'       => 'Jepara, 9 September 1615',
            'alamat'    => 'Jepara, Jawa Tengah',
            'no_hp'     => '085222222222',
            'email'     => 'andito@gmail.com',
            'password'  => bcrypt('12345'),
            'role'     => 'user'
        ]);

        obat::create([
            'nama_obat'      => 'Amoxicillin',
            'harga_obat'       => '50000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Ibuprofen',
            'harga_obat'       => '40000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Lidocaine',
            'harga_obat'       => '30000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Chlorhexidine',
            'harga_obat'       => '20000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Fluoride varnish',
            'harga_obat'       => '25000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Metronidazole',
            'harga_obat'       => '55000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Acetaminophen',
            'harga_obat'       => '60000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Benzocaine',
            'harga_obat'       => '20000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Hydrogen peroxide',
            'harga_obat'       => '30000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Calcium hydroxide',
            'harga_obat'       => '50000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Oral rinse',
            'harga_obat'       => '45000',
            'stok_obat'        => '100',
        ]);
        obat::create([
            'nama_obat'      => 'Dental adhesive',
            'harga_obat'       => '35000',
            'stok_obat'        => '100',
        ]);
    }
}
