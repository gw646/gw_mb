<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email','admin@gmail.com')->first();
        if (empty($admin)){
           $user =  User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()
            ]);
           $role =  Role::firstOrCreate(['name' => ADMIN,'is_default' => 1]);
            $user->assignRole($role);
        }
    }
}
