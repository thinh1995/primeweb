<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('stores')->insert([
            'name' => 'Primeweb',
            'domain' => 'primeweb.asia',
            'created_by' => 1,
        ]);

        DB::table('stores')->insert([
            'name' => 'T001',
            'domain' => 't001.primeweb.asia',
            'created_by' => 1,
        ]);
    }
}
