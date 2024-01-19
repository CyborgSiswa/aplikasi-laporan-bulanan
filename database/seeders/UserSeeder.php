<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'nik' => '23781683',
            'no_hp' => '027162362',
            'jabatan' => 'admin'
        ]);
        User::create([
            'name' => 'amel',
            'email' => 'amel@admin.com',
            'password' => bcrypt('12345678'),
            'nik' => '20007443',
            'no_hp' => '027162362',
            'jabatan' => 'admin'
        ]);
    }
}
