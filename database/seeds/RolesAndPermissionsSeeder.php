<?php

use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = \Spatie\Permission\Models\Role::create(['name' => 'super admin']);
        $roleAdmin = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        $roleMember = \Spatie\Permission\Models\Role::create(['name' => 'member']);

        $superAdminPermissions = [
            // Admin
            'view admin',
            // User
            'create users',
            'read users',
            'update users',
            'delete users',
            // Store
            'create stores',
            'read stores',
            'update stores',
            'delete stores',
        ];

        $adminPermissions = [
            // Admin
            'view admin',
            // User
            'create users',
            'read users',
            'update users',
            'delete users',
            // Store
            'create stores',
            'read stores',
            'update stores',
            'delete stores',
        ];

        $memberPermissions = [

        ];

        foreach ($superAdminPermissions as $permission) {
            \Spatie\Permission\Models\Permission::create([
                'name' => $permission
            ]);
        }

        foreach ($adminPermissions as $permission) {
            \Spatie\Permission\Models\Permission::create([
                'name' => $permission
            ]);
        }

        foreach ($memberPermissions as $permission) {
            \Spatie\Permission\Models\Permission::create([
                'name' => $permission
            ]);
        }

        $roleSuperAdmin->givePermissionTo($superAdminPermissions);
        $roleAdmin->givePermissionTo($adminPermissions);
        $roleMember->givePermissionTo($memberPermissions);
    }
}
