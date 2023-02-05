<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function getAll()
    {
        return static::all();
    }

    public function findRole($id)
    {
        return static::find($id);
    }

    public function deleteRole($id)
    {
        return static::find($id)->delete();
    }

    public function createOrUpdate($collection = [], $id = null)
    {
        if (is_null($id)) {
            $role = new Role;
        } else {
            $role = Role::find($id);
        }
        $role->role = $collection['role'];
        // $role->status = $collection['status'];
        return $role->save();
    }

    public function EmployeeRoles()
    {
        return $this->belongsToMany(Employee::class);
    }
}
