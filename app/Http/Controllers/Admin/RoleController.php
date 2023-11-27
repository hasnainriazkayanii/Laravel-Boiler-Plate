<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(request()->ajax()) {
            $roles =  Role::where('is_backend_role',true)->get();
            $dt = datatables()->of($roles)
            ->addColumn('name', function($data){
                return ucfirst($data->name);
            })
            ->addColumn('type', function($data){
                if($data->is_backend_role){
                    return '<span class="badge badge-primary"> System</span>';
                }
                else{
                    return '<span class="badge badge-secondary"> External</span>';
                }
            })
            ->addColumn('action', function($data){
                $button ='';
                $button='<div>';
                $button.= CreateTableActionButtonSimple('roles/'.$data->id.'/edit','fa fa-edit', ' edit-role', '',$data->id);
                $button.= CreateTableActionButtonSimple('javascript:void(0)','fa fa-trash-alt', 'delete-role','',$data->id);
                $button.='</div>';
               return $button;
           })
           ->rawColumns(['action','type'])
           ->addIndexColumn()
           ->make(true);
           return $dt;
        }
        $columns = $this->getColumns();
        $modules=  \App\Models\Module::all();
        $type ='system';
        return view('admin.administration.roles', compact('columns','modules', 'type'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules=  \App\Models\Module::all();
        $type = 'system';
        return view('admin.administration.create-role', compact('modules', 'type'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $role  = Role::with('permissions')->where($where)->first();
        $modules=  \App\Models\Module::all();
        $type = 'system';
        if(!$role->is_backend_role){
            $type = $role->name;
        }
        return view('admin.administration.edit-role', compact('modules', 'type','role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_id = $request->role_id;
        $data = array();
        $data['name'] =  $request->name;
        $data['is_backend_role'] = true;
        $role   =  \Spatie\Permission\Models\Role::updateOrCreate(['id' => $role_id], $data);
        $newPermissions = $request->input('permission');
        $role->syncPermissions($newPermissions);
        return redirect()
        ->route('admin.roles')
        ->with('status',__('admin.messages.success.update_successfully'));
    }


    protected function getColumns(): array
    {
        return [
            ['data' => 'id', 'name' => 'id', 'visible' => false, 'th' => '#', 'priority'=> 2, 'orderable' => false],
            ['data' => 'name', 'name' => 'name', 'th' =>  __('admin.datatables.roles.role_name') , 'priority'=> 1, 'orderable' => true],
            ['data' => 'type', 'name' => 'type', 'th' => __('admin.datatables.roles.role_type') , 'priority'=> 2, 'orderable' => false],
            ['data' => 'action', 'name' => 'action', 'th' => __('admin.datatables.action'), 'priority'=> 1, 'orderable' => false, 'width' => 100],
        ];
    }
}
