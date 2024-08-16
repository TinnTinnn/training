<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create($data)
    {
        $role = new Role();
        $role->fill($data);
        $role->save();

        return $role;
    }
}
