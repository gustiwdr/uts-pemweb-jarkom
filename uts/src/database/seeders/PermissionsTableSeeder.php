<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'frontend_access',
            ],
            [
                'id'    => 18,
                'title' => 'footer_create',
            ],
            [
                'id'    => 19,
                'title' => 'footer_edit',
            ],
            [
                'id'    => 20,
                'title' => 'footer_show',
            ],
            [
                'id'    => 21,
                'title' => 'footer_delete',
            ],
            [
                'id'    => 22,
                'title' => 'footer_access',
            ],
            [
                'id'    => 23,
                'title' => 'fn_b_access',
            ],
            [
                'id'    => 29,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 30,
                'title' => 'menu_access',
            ],
            [
                'id'    => 31,
                'title' => 'menu_create',
            ],
            [
                'id'    => 32,
                'title' => 'menu_show',
            ],
            [
                'id'    => 33,
                'title' => 'menu_edit',
            ],
            [
                'id'    => 34,
                'title' => 'menu_delete',
            ],
            [
                'id'    => 35,
                'title' => 'category_access',
            ],
            [
                'id'    => 36,
                'title' => 'category_create',
            ],
            [
                'id'    => 37,
                'title' => 'category_show',
            ],
            [
                'id'    => 38,
                'title' => 'category_edit',
            ],
            [
                'id'    => 39,
                'title' => 'category_delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
