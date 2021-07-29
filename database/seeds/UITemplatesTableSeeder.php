<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UITemplatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ui_templates')->insert([
            'name' => 'T001',
            'directory' => 'T001',
            'is_active' => 1,
        ]);
    }
}
