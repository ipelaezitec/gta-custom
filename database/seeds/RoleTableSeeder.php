<?php

use Illuminate\Database\Seeder;
use gta\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = new Role();
        $role_superadmin->name = 'SuperAdmin';
        $role_superadmin->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->save();
    }
}
