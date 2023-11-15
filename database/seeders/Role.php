<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      ModelsRole::create(['name' => 'admin']);
       ModelsRole::create(['name' => 'user']);
    }
}
