<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin  = Role::create(['name'=>'admin']);
        $editor = Role::create(['name'=>'editor']);

        $permissions = ['edit posts','create posts','delete posts'];

        foreach ($permissions as $permission){
            Permission::create(['name' => $permission]);
        }

        $admin->givePermissionTo($permissions);
        $editor->givePermissionTo('edit posts');
    }
}
