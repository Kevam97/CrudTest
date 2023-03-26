<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientView = Permission::create([
            'name' => 'client_view',
            'guard_name'=> 'web',
        ]);
        $supplierView  = Permission::create([
            'name' => 'supplier_view',
            'guard_name'=> 'web',
        ]);

        $internView  = Permission::create([
            'name' => 'intern_view',
            'guard_name'=> 'web',
        ]);


        $client = Role::create([
            'name' =>'client',
            'guard_name' =>'web']);
        $supplier = Role::create([
            'name' =>'supplier',
            'guard_name' =>'web']);

        $intern = Role::create([
            'name' =>'intern',
            'guard_name' =>'web']);

        $client->givePermissionTo($clientView);
        $supplier->givePermissionTo($supplierView);
        $intern->givePermissionTo($internView);
    }
}
