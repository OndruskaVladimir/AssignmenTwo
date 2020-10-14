<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => "Jack Smith",
            'GPA' => "4.0",
            'age' => "23"
        ]);
    }
}
