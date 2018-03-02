<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Poweruser'
            ],
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'trip-list',
        		'display_name' => 'Display trip Listing',
        		'description' => 'See only Listing Of trip'
        	],
        	[
        		'name' => 'trip-create',
        		'display_name' => 'Create trip',
        		'description' => 'Create New trip'
        	],
        	[
        		'name' => 'trip-edit',
        		'display_name' => 'Edit trip',
        		'description' => 'Edit trip'
        	],
        	[
        		'name' => 'trip-delete',
        		'display_name' => 'Delete trip',
        		'description' => 'Delete trip'
        	]
        ];


        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
