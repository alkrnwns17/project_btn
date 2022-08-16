<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];

        $admin = User::create(array_merge(
            [
                'name'     => 'Aldy',
                'email'    => 'Aldy@gmail.com',
                'password' => bcrypt('admin'),
                'chatid'   => '1475588494',
                'role'     => 'admin'
            ],
            $default_user_value
        ));

        $staff = User::create(array_merge(
            [
                'name'    => 'Ninda',
                'email'   => 'Ninda.rib97@gmail.com',
                'password' => bcrypt('admin'),
                'chatid'  => '5127815236',
                'role'     => 'staff'
            ],
            $default_user_value
        ));


        $role_admin = Role::create(['name' => 'admin']);
        $role_staff = Role::create(['name' => 'staff']);

        $perm_all = Permission::create(['name' => 'sees all']);
        $perm_own = Permission::create(['name' => 'sees own']);

        $admin->assignRole('admin');
        $staff->assignRole('staff');

        $admin->givePermissionTo($perm_all);
        $staff->givePermissionTo($perm_own);
    }
}
