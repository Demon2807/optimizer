<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        try{
            $role = Role::create(['name' => 'admin']);
            $role = Role::create(['name' => 'lite']);
            $role = Role::create(['name' => 'premium']);
        }catch(Spatie\Permission\Exceptions\RoleAlreadyExists $e){
            return false;
        }
    }
}
