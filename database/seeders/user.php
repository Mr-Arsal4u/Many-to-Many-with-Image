<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

      $adminuser= ModelsUser::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => ('password'),
      ]);
      $adminuser->givePermissionTo(['edit posts','delete posts']);
      $adminuser->assignRole(['admin']);


    }
}

