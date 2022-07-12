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
        'first_name' => 'Michael',
        'last_name'  => 'Scott',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Dwight',
        'last_name'  => 'Schrute',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Pam',
        'last_name'  => 'Halpert',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Jim',
        'last_name'  => 'Halpert',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Andrew',
        'last_name'  => 'Bernard',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Phyllis',
        'last_name'  => 'Vance',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Stanley',
        'last_name'  => 'Hudson',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Oscar',
        'last_name'  => 'Martinez',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Angela',
        'last_name'  => 'Martin',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Kevin',
        'last_name'  => 'Malone',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Ryan',
        'last_name'  => 'Howard',
      ]);
      DB::table('characters')->insert([
        'first_name' => 'Kelly',
        'last_name'  => 'Kapoor',
      ]);
    }
}
