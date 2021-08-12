<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BooksTalbeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => '1',
            'name' => 'Yuma Teramoto',
            'tel' => '08032940624',
            'date' => 2020-06-24,
            'time' => 17:30,
            'user_id' => '1',
            'created_at' => 2020-06-24,
            'updated_at' => 20200-6-24,
        ]);
    } 
}
