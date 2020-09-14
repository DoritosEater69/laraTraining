<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class test_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Niclas Koch',
            'email' => 'niclas.koch95@web.de',
            'password' => Hash::make('password'),
            'request_admin_role' => false
        ]);

        $user->assignRole('admin');


        $user = User::create([
            'name' => 'Test User',
            'email' => 'test.test@test.de',
            'password' => Hash::make('test'),
            'request_admin_role' => false
        ]);

        $user->assignRole('user');

        $user = User::create([
            'name' => 'Test User2',
            'email' => 'test.test2@test.de',
            'password' => Hash::make('test'),
            'request_admin_role' => false
        ]);

        $user->assignRole('user');

        $user = User::create([
            'name' => 'Test User3',
            'email' => 'test.test4@test.de',
            'password' => Hash::make('test'),
            'request_admin_role' => false
        ]);

        $user->assignRole('user');

    }
}
