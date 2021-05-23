<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Role
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editer']);
        $roleUser = Role::create(['name' => 'user']);

        //Permission Array
        $permissions = [
            //dashboard
            'dashboard.view',

            //blog permisson
            'blog.craete',
            'blog.view',
            'blog.edit',
            'blog.create',
            'blog.delete',
            'blog.approve',

            //admin permisson
            'admin.craete',
            'admin.view',
            'admin.edit',
            'admin.create',
            'admin.delete',
            'admin.approve',

            //role permisson
            'role.craete',
            'role.view',
            'role.edit',
            'role.create',
            'role.delete',
            'role.approve',

            //profile permisson

            'profile.view',
            'profile.edit'
        ];

        //Create and Assign Permisson

        //  $permission = Permission::create(['name' => 'edit articles']);
        for ($i = 0; $i < count($permissions); $i++) {
            //create permission
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);
        }
    }
}
