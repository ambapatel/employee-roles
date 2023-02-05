<?php

namespace App\Repositories\Employee;


use App\Repositories\Employee\EmployeeInterface as EmployeeInterface;
use App\Models\Employee;


class EmployeeRepository implements EmployeeInterface
{
    public $employee;

    function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        return $this->employee->getAll();
    }

    public function find($id)
    {
        return $this->employee->findEmployee($id);
    }

    public function delete($id)
    {
        return $this->employee->deleteEmployee($id);
    }

    public function createOrUpdate($collection, $id = null)
    {
        return $this->employee->createOrUpdate($collection,$id);
        
    }
}
