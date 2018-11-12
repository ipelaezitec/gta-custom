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
        $role_user = Role::where('name', 'User')->first();
        
        $owner = new User();
        $owner->name = 'Owner';
        $owner->email = 'owner@owner.com';
        $owner->password = bcrypt('owner');
        $owner->save();
        $owner->roles()->attach($role_superadmin);

        $super = new User();
        $super->name = 'super';
        $super->email = 'super@super.com';
        $super->password = bcrypt('super');
        $super->save();
        $super->roles()->attach($role_superadmin);

        $super2 = new User();
        $super2->name = 'super2';
        $super2->email = 'super2@super2.com';
        $super2->password = bcrypt('super2');
        $super2->save();
        $super2->roles()->attach($role_superadmin);

        $admin1 = new User();
        $admin1->name = 'admin';
        $admin1->email = 'admin@admin.com';
        $admin1->password = bcrypt('admin');
        $admin1->save();
        $admin1->roles()->attach($role_admin);

        $admin2 = new User();
        $admin2->name = 'admin2';
        $admin2->email = 'admin2@admin2.com';
        $admin2->password = bcrypt('admin2');
        $admin2->save();
        $admin2->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
