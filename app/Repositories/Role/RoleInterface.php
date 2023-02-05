<?php

namespace App\Repositories\Role;


interface RoleInterface
{

    public function getAll();
    

    public function find($id);


    public function delete($id);
    

    public function createOrUpdate($collection, $id = null);
}
