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
                'name' => 'John Doe',
                'email' => 'johndoe@email.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Lois Lane',
                'email' => 'lois@email.com',
                'password' => bcrypt('secret'),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
