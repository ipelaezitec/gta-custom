<?php

use Illuminate\Database\Seeder;
use gta\User;
use gta\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'SuperAdmin')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        
        $superAdmin = new User();
        $superAdmin->name = 'super';
        $superAdmin->email = 'super@super.com';
        $superAdmin->password = bcrypt('super');
        $superAdmin->save();
        $superAdmin->roles()->attach($role_superadmin);

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
