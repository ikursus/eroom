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
      // Data user 1
      DB::table('users')->insert([
          'name' => 'Ali',
          'email' => 'admin@gmail.com',
          'unit' => 'IT',
          'password' => bcrypt('admin'),
          'phone' => '0123456789',
          'status' => 'admin'
      ]);

      // Data user 2
      DB::table('users')->insert([
          'name' => 'Abu',
          'email' => 'staff@gmail.com',
          'unit' => 'IT',
          'password' => bcrypt('staff'),
          'phone' => '01987654321',
          'status' => 'staff'
      ]);

      // Data user 3
      DB::table('users')->insert([
          'name' => str_random(5),
          'email' => str_random(5).'@gmail.com',
          'unit' => 'IT',
          'password' => bcrypt('staff'),
          'phone' => '0123456987',
          'status' => 'staff'
      ]);
    }
}
