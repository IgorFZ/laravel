<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::firstOrCreate(['name' => 'create posts']);
        // Permission::firstOrCreate(['name' => 'view posts']);
        // Permission::firstOrCreate(['name' => 'update posts']);
        // Permission::firstOrCreate(['name' => 'delete posts']);

        // // Criar o papel 'admin' apenas se ainda não existir
        // $role = Role::firstOrCreate(['name' => 'admin']);

        // // Atribuir permissões ao papel 'admin'
        // $role->givePermissionTo('create posts');
        // $role->givePermissionTo('view posts');
        // $role->givePermissionTo('update posts');
        // $role->givePermissionTo('delete posts');

        // // Atribuir o papel 'admin' ao usuário
        // $user = User::find(1);
        // if ($user) {
        //     $user->assignRole('admin');
        // }

        // Criar o papel 'user' apenas se ainda não existir
        $role = Role::firstOrCreate(['name' => 'user']);

        // Atribuir permissões ao papel 'user'
        $role->givePermissionTo('view posts');

        // Atribuir o papel 'user' ao usuário
        $user = User::find(2);
        if ($user) {
            $user->assignRole('user');
        }
    }
}
