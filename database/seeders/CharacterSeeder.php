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
        'name' => 'Michael Scott',
      ]);
      DB::table('characters')->insert([
        'name' => 'Dwight Schrute',
      ]);
      DB::table('characters')->insert([
        'name' => 'Pam Halpert',
      ]);
      DB::table('characters')->insert([
        'name' => 'Jim Halpert',
      ]);
      DB::table('characters')->insert([
        'name' => 'Andrew Bernard',
      ]);
      DB::table('characters')->insert([
        'name' => 'Phyllis Vance',
      ]);
      DB::table('characters')->insert([
        'name' => 'Stanley Hudson',
      ]);
      DB::table('characters')->insert([
        'name' => 'Oscar Martinez',
      ]);
      DB::table('characters')->insert([
        'name' => 'Angela Martin',
      ]);
      DB::table('characters')->insert([
        'name' => 'Kevin Malone',
      ]);
      DB::table('characters')->insert([
        'name' => 'Ryan Howard',
      ]);
      DB::table('characters')->insert([
        'name' => 'Kelly Kapoor',
      ]);
    }
}
