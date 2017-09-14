<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Clark Kent',
                'email' => 'clark@email.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Lois Lane',
                'email' => 'lois@email.com',
                'password' => bcrypt('654321'),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
