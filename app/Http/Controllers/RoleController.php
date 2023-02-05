<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\Role\RoleInterface as RoleInterface;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function __construct(RoleInterface $role)
    {
        $this->role = $role;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role->getAll();

        return view('roles.index', compact('roles'));
    }

    /**
     * Creating a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('roles.create');
    }

    public function save(RoleRequest $request, $id = null)
    {

        try {
            $collection = $request->except(['_token', '_method']);
            $this->role->createOrUpdate($collection, $id);

        } catch (ValidationException $e) {
            //dd($e->getErrors());
            return Redirect::back()->withErrors($e->getErrors())->withInput();
        }
        return redirect()->route('role')->withSuccess($id ? trans('admin.update_message') : trans('admin.save_message'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->role->find($id);
        return view('roles.edit', compact('role'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $this->role->delete($id);
        return redirect()->route('role')->withSuccess(trans('admin.delete_message'));
    }
}
