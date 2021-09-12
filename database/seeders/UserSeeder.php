<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@technopark.com',
            'password' => Hash::make('Password123'),
        ]);

        
        $adminrole = Role::create(['name' => 'admin']);
        $user->assignRole($adminrole);
        Role::create(['name' => 'technopark']);
        Role::create(['name' => 'startup']);
        Role::create(['name' => 'komunitas']);
        Role::create(['name' => 'peserta']);
        
    }
}