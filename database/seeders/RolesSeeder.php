<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => json_encode([
                'create-post' => true,
                'update-post' => true,
                'read-post' => true,
                'publish-post' => true,
                'assign-roles' => true,
            ]),
        ]);

        $user = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => json_encode([
                'read-post' => true,
            ]),
        ]);

        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => json_encode([
                'create-post' => true,
                'update-post' => true,
            ]),
        ]);

        $editor = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => json_encode([
                'publish-post' => true,
            ]),
        ]);
    }
}
