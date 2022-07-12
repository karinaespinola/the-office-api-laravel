<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('characters')->insert([
        'id'         => 1,
        'first_name' => 'Michael',
        'last_name'  => 'Scott',
      ]);
      DB::table('characters')->insert([
        'id'         => 2,
        'first_name' => 'Dwight',
        'last_name'  => 'Schrute',
      ]);
      DB::table('characters')->insert([
        'id'         => 3,
        'first_name' => 'Pam',
        'last_name'  => 'Halpert',
      ]);
      DB::table('characters')->insert([
        'id'         => 4,
        'first_name' => 'Jim',
        'last_name'  => 'Halpert',
      ]);
      DB::table('characters')->insert([
        'id'         => 5,
        'first_name' => 'Andrew',
        'last_name'  => 'Bernard',
      ]);
      DB::table('characters')->insert([
        'id'         => 6,
        'first_name' => 'Phyllis',
        'last_name'  => 'Vance',
      ]);
      DB::table('characters')->insert([
        'id'         => 7,
        'first_name' => 'Stanley',
        'last_name'  => 'Hudson',
      ]);
      DB::table('characters')->insert([
        'id'         => 8,
        'first_name' => 'Oscar',
        'last_name'  => 'Martinez',
      ]);
      DB::table('characters')->insert([
        'id'         => 9,
        'first_name' => 'Angela',
        'last_name'  => 'Martin',
      ]);
      DB::table('characters')->insert([
        'id'         => 10,
        'first_name' => 'Kevin',
        'last_name'  => 'Malone',
      ]);
      DB::table('characters')->insert([
        'id'         => 11,
        'first_name' => 'Ryan',
        'last_name'  => 'Howard',
      ]);
      DB::table('characters')->insert([
        'id'         => 12,
        'first_name' => 'Kelly',
        'last_name'  => 'Kapoor',
      ]);
    }
}
