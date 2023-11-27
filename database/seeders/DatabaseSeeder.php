<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RolePermissionSeeder::class);
        $user =  User::create([
            'name' => 'Demo Admin',
            'email' => 'hasnainriazkayani1@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $user->syncRoles(array('admin'));
        $this->call(SettingSeeder::class);
        $this->call(EmailSeeder::class);
        $this->call(VehicleDataSeeder::class);
    }
}
