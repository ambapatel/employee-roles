<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    public function getAll()
    {
        return static::all();
    }

    public function findEmployee($id)
    {
        return static::find($id);
    }

    public function deleteEmployee($id)
    {
        return static::find($id)->delete();
    }

    public function createOrUpdate($collection, $id = null)
    {
        try {
            DB::beginTransaction();
            if (is_null($id)) {
                $employee = new Employee;
            } else {
                $employee = Employee::find($id);
            }
            $employee->first_name = $collection['first_name'];
            $employee->last_name = $collection['last_name'];
            $employee->email = $collection['email'];
            if(!empty($collection['profile_image'])){
                $employee->profile_image = $collection['profile_image'];
            }
            $employee->current_address = $collection['current_address'];
            $employee->permanent_address = $collection['permanent_address'];
            $employee->dob = date('Y-m-d', strtotime($collection['dob']));

            $employee->save();
            $employee->EmployeeRoles()->sync($collection['roles']);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th->getMessage();
        }
        return $employee;
    }
    public function EmployeeRoles()
    {
        return $this->belongsToMany(Role::class, 'employee_roles');
    }
}
