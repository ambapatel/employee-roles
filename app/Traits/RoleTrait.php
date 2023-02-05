<?php

namespace App\Traits;

use App\Models\Role;


trait RoleTrait
{
    /**
     * Return Array of roles with id in index
     */
    public function getRolesArr()
    {
        $roles = Role::getAll();
        $arr_roles  = [];
        foreach ($roles as $role) {
            $arr_roles[$role->id]  = $role->role;
        }
        return $arr_roles;
    }
}
