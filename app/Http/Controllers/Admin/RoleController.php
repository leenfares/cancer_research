<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;




class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::get();
        return view('admin.Role.all',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::create([

            'name' => $request->name,
            'guard_name' =>'web'
        ]);
        return Redirect::back()->with(['success' =>'One Role has been added']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
        $role = Role::findOrFail($id);
        $permissions= Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id')
        ->all();
       
        return view('admin.role.edit',['role'=>$role,'rolePermissions'=>$rolePermissions,'permissions'=>$permissions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        $role = Role::findOrFail($request->ids);
        if(!$role)
           return Redirect::back()->with(['fail'=>'role was not found']);        
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->input('permissions'));
        return Redirect::back()->with(['success'=>'updating has been done successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if(!$role)
        return redirect('admin/roles')->with(['fail'=>'role was not found']); 
        $role->delete();  
        return redirect('admin/roles')->with(['success'=>'deleting has been done successfully']);  
        
    }

     public function assign()
     {
         $user=User::where('name','doaa') -> first();
         $user->assignRole('admin');
         return "hi";
     }
}
