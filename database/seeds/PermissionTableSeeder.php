<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Model\User;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'soft-admin'
         ];
 
        //Creating Role
        $role = new Role();
        $role->name ="Admin";
        $role->guard_name ="web";
        $role->save();

        $role = new Role();
        $role->name ="super-admin";
        $role->guard_name ="web";
        $role->save();

         foreach ($permissions as $permission) {
             $temp = Permission::create(['name' => $permission]);
              $temp->assignRole($role);
         }

         $user = User::find(1);
         $user->assignRole(['Admin','super-admin']);
        

    }
}
