<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('users')->delete();

        $users = [
          [
            'name' => 'Ruddy C',
            'username' => 'admin',
            'email' => 'ruddyc@example.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'name' => 'Kaka Ade',
            'username' => 'operator',
            'email' => 'kakade@example.com',
            'role' => 'operator',
            'email_verified_at' => now(),
            'password' => bcrypt('operator'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
          ]
        ];
        DB::table('users')->insert($users);
    }
}
