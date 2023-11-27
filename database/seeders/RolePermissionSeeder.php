<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Permission;
use App\Models\Module;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $modules = config('permissions.modules');
        foreach($modules as $key => $value) {
           $module = Module::create(['name' => $value]);

           $system_permissions = config('permissions.system.'.$key);
           if($system_permissions){
                foreach($system_permissions as $permission) {
                    Permission::create(['name' => $permission , 'module_id' => $module->id , 'permission_type' => 'system']);
                }
           }

        }
        $role = Role::create(['name' => 'admin', 'is_backend_role' => true]);
        $role->givePermissionTo(Permission::where(array('permission_type' => 'system'))->get());
    }
}
