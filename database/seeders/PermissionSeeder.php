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
        $clientCreate = Permission::create([
            'name' => 'client_create',
            'guard_name'=> 'web',
        ]);
        $supplierCreate  = Permission::create([
            'name' => 'supplier_create',
            'guard_name'=> 'web',
        ]);

        $internCreate  = Permission::create([
            'name' => 'intern_create',
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

        $client->givePermissionTo($clientCreate);
        $supplier->givePermissionTo($supplierCreate);
        $intern->givePermissionTo($internCreate);
    }
}
