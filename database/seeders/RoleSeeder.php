<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(['name' => ADMIN,'is_default' => 1]);
        Role::firstOrCreate(['name' => REGISTRANTS,'is_default' => 1]);
        Role::firstOrCreate(['name' => SPECIALIST,'is_default' => 1]);
    }
}
