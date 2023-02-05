<?php

namespace App\Repositories\Employee;


interface EmployeeInterface
{

    public function getAll();


    public function find($id);


    public function delete($id);

    public function createOrUpdate($collection, $id = null);
}
