<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien = User::create([
            'name' => 'Pasien',
            'email' => 'pasien@klinik.ok',
            'password' => bcrypt('12345678')
        ]);
        $pasien->assignRole('pasien');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@klinik.ok',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $admin_poli = User::create([
            'name' => 'Admin Poli',
            'email' => 'admin_poli@klinik.ok',
            'password' => bcrypt('12345678')
        ]);
        $admin_poli->assignRole('admin-poli');

        $kasir = User::create([
            'name' => 'Kasir',
            'email' => 'kasir@klinik.ok',
            'password' => bcrypt('12345678')
        ]);
        $kasir->assignRole('kasir');

        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@klinik.ok',
            'password' => bcrypt('12345678')
        ]);
        $super_admin->assignRole('super-admin');
    }
}
