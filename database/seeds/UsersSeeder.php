<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nama' => 'Dimas Eko W',
            'NIP' => '112233445566',
            'email' => 'Dimas@Eko.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Surabaya',
            'level' => 1, //Admin
            'no_tlf' => '089736473827',
            'jabatan' => 'Direktur Amiinn'
        ]);
    }
}
