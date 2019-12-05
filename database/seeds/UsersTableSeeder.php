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
          'name' => 'Coordinador',
          'username' => 'Coordinador',
          'email' => '',
          'password' => bcrypt('coordinadorlcc'),
          'id_area' => '1',
      ]);
    }
}
