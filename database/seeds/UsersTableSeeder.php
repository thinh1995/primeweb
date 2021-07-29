<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'store_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $superAdminUser = \App\Models\User::find(1);
        $superAdminUser->assignRole('super admin');

        DB::table('users')->insert([
            'store_id' => 2,
            'name' => 't001',
            'email' => 't001@admin.com',
            'password' => Hash::make('password'),
        ]);

        $adminUser = \App\Models\User::find(2);
        $adminUser->assignRole('admin');
    }
}
