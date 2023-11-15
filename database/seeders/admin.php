<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class admin extends Seeder

    /**
     * Run the database seeds.
     */

{
    public function run()
    {

     $user= User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => ('password'),
        ]);
        $role = ModelsRole::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->name]);


        //way to run this migration pehlay permission then admin seeder
    }
}