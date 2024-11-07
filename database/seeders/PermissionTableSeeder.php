<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
        [
            'id'    => 1,
            'title' => 'permission_create',
        ],
        [
            'id'    => 2,
            'title' => 'permission_edit',
        ],
        [
            'id'    => 3,
            'title' => 'permission_show',
        ],
        [
            'id'    => 4,
            'title' => 'permission_delete',
        ],
        [
            'id'    => 5,
            'title' => 'permission_access',
        ],
    ];

    Permission::insert($permissions);
    }
}
