<?php

namespace App\Repositories\Role;


use App\Repositories\Role\RoleInterface as RoleInterface;
use App\Models\Role;


class RoleRepository implements RoleInterface
{
    public $role;

    function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getAll()
    {
        return $this->role->getAll();
    }

    public function find($id)
    {
        return $this->role->findRole($id);
    }

    public function delete($id)
    {
        return $this->role->deleteRole($id);
    }

    public function createOrUpdate($collection, $id = null)
    {
        return $this->role->createOrUpdate($collection,$id);
        
    }
}
