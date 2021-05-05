<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'PHP',
        ]);
        DB::table('genres')->insert([
            'name' => 'HTML',
        ]);
        DB::table('genres')->insert([
            'name' => 'CSS',
        ]);
        DB::table('genres')->insert([
            'name' => 'JavaScript',
        ]);
        DB::table('genres')->insert([
            'name' => 'Python',
        ]);
        DB::table('genres')->insert([
            'name' => 'DB',
        ]);
        DB::table('genres')->insert([
            'name' => 'アジャイル',
        ]);
        DB::table('genres')->insert([
            'name' => 'Linux',
        ]);
        DB::table('genres')->insert([
            'name' => 'オブジェクト指向',
        ]);

        DB::table('genres')->insert([
            'name' => 'Other',
        ]);
    }
}
