<?php

namespace Database\Seeders;

use App\Models\Page;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MAKING SHURE ALL THESE TABLES ARE EMPTY
        DB::statement("SET foreign_key_checks=0");
        DB::table('pages')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('users')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::statement("SET foreign_key_checks=1");

        //CREATING DEFAULT PAGES
        Page::create([
            'title' => 'global'
        ]);

        Page::create([
            'title' => 'student'
        ]);

        Page::create([
            'title' => 'setting'
        ]);

        Page::create([
            'title' => 'role'
        ]);

        Page::create([
            'title' => 'user'
        ]);

        //CREATING DEFAULT PERMISSION
        $pages = array('global', 'role', 'user');

        for($i=0; $i<count($pages); $i++)
        {
            if($pages[$i] != "global"){
                $view    = Permission::create(['name' => $pages[$i]."_view"]);
                $add     = Permission::create(['name' => $pages[$i]."_create"]);
                $edit    = Permission::create(['name' => $pages[$i]."_edit"]);
                $delete  = Permission::create(['name' => $pages[$i]."_delete"]);
            }else{
                $master           = Permission::create(['name' => "master"]);
                $global           = Permission::create(['name' => "global"]);
                $student          = Permission::create(['name' => "student"]);
                $settings_view    = Permission::create(['name' => "setting_view"]);
                $settings_edit    = Permission::create(['name' => "setting_edit"]);
            }
        }

        //CREATING DEFAULT ROLE WITH THEIR PERMISSION
        $role_developer = Role::create(['name' => strtolower('developer')]);
        $role_developer->givePermissionTo(1);

        $role_super_admin = Role::create(['name' => strtolower('super admin')]);
        $role_super_admin->givePermissionTo(2);

        $role_student = Role::create(['name' => strtolower('student')]);
        $role_student->givePermissionTo(3);

        $role_uncategorized = Role::create(['name' => strtolower('uncategorized')]);


        //CREATING DEFAULT USER WITH THEIR ROLE
        $user_master_developer = User::create([
            'first_name'     => 'Master',
            'last_name'      => 'Developer',
            'username'       => 'developer',
            'email'          => 'dev@email.com',
            'phone'          => '11111111111',
            'password'       => Hash::make('password')
        ]);
        $user_master_developer->assignRole('developer');

        $user_super_admin = User::create([
            'first_name'     => 'Super',
            'last_name'      => 'Admin',
            'username'       => 'admin',
            'email'          => 'admin@email.com',
            'phone'          => '22222222222',
            'password'       => Hash::make('password')
        ]);

        $user_super_admin->assignRole('super admin');

        $user_student = User::create([
            'first_name'     => 'Site',
            'last_name'      => 'Student',
            'username'       => 'student',
            'email'          => 'student@email.com',
            'phone'          => '33333333333',
            'password'       => Hash::make('password')
        ]);

        $user_student->assignRole('student');
    }
}
