<?php

use Illuminate\Database\Seeder;

class InquilinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Inquilino::class, 10)->create();
    }
}
