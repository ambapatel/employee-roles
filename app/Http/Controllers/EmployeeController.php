<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\Employee\EmployeeInterface as EmployeeInterface;
use App\Repositories\Role\RoleInterface as RoleInterface;
use App\Http\Requests\EmployeeRequest;
use App\Traits\RoleTrait;

class EmployeeController extends Controller
{
    use RoleTrait;
    public function __construct(EmployeeInterface $employee, RoleInterface $role)
    {
        $this->employee = $employee;
        $this->role = $role;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee->getAll();

        return view('employees.index', compact('employees'));
    }

    /**
     * Creating a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // load array of roles with id
        $roles = $this->getRolesArr();
        return view('employees.create', compact('roles'));
    }

    /**
     * Add & Update Employee Record
     */
    public function save(EmployeeRequest $request, $id = null)
    {

        try {
            $collection = $request->except(['_token', '_method']);
            if (!empty($request->profile_image)) {
                $filename = time() . '.' . $request->profile_image->extension();
                $request->profile_image->move(public_path('employees'), $filename);
                $collection['profile_image'] = $filename;
            }
            $this->employee->createOrUpdate($collection, $id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
        return redirect()->route('employee')->withSuccess($id ? trans('admin.update_message') : trans('admin.save_message'));
    }

    /**
     * Open Employee data form for update.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employee->find($id);
        $selected_roles = [];
        foreach ($employee->EmployeeRoles as $role) {
            $selected_roles[] = $role->id;
        }
        $roles = $this->getRolesArr();
        return view('employees.edit', compact('employee', 'roles', 'selected_roles'));
    }

    /**
     * Destroy a employee record.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $this->employee->delete($id);
        return redirect()->route('employee')->withSuccess(trans('admin.delete_message'));
    }
}
