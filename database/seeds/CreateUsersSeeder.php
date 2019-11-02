<?php

use Illuminate\Database\Seeder;
use App/User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
          [
            'role' => 'admin',
            'email' => 'admin@pbf.com',
            'password' => bcrypt('adminadmin'),
            'Nama' => 'Hai Admin',
            'tanggallahir' => '11/02/2019',
            'nomorhp' => '(1351) 3513-5135',
            'Alamat' => 'Alamat Admin'
          ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
