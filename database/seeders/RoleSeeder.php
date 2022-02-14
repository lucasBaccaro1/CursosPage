<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'admin']);
       $role2 = Role::create(['name' => 'blogger']);

       Permission::create(['name' => 'cursos.create'])->assignRole($role1);
       Permission::create(['name' => 'cursos.destroy'])->assignRole($role1);
       Permission::create(['name' => 'cursos.edit'])->assignRole($role1);

    }
}
