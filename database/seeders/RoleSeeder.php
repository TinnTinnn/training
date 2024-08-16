<?php

namespace Database\Seeders;

use App\Http\Controllers\RoleController;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $ctl = new RoleController();

        $defaultRoles = [
            'developer',
            'super_admin',
            'admin',
            'moderator',
            'member',
        ];
        for ($i = 0; $i < count($defaultRoles); $i++) {
            $ctl->create(['name' => $defaultRoles[$i]]);
        }
    }
}
