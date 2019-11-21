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
      DB::table('users')->insert([
          'name' => 'Cordinador',
          'username' => 'Cordinador',
          'email' => '',
          'password' => bcrypt('cordinadorlcc'),
          'id_area' => '0',
      ]);
    }
}
