<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Redirect,Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if(request()->ajax()) {
            $users = $this->make_admin_query($request,'admin');
            $dt = datatables()->of($users)
                    ->addColumn('action', function($data){
                        $button='<span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end" style="">';
                        $button.=CreateTableActionButton('javascript:void(0)','fa fa-edit', 'edit-user', __('admin.buttons.edit'),$data->id);
                        $button.=CreateTableActionButton('javascript:void(0)','fa fa-trash-alt', 'delete-user', __('admin.buttons.delete'),$data->id);
                        $button.='</div>
                        </span>';
                        return $button;
                    })
                    ->addColumn('role', function ($user) {
                        if ($user->roles && $user->roles->count() > 0){
                            return '<span class="badge badge-success">'. ucfirst($user->roles->first()->name) .'</span>';
                        }
                        return '';
                   })
                    ->rawColumns(['role','action'])
                    ->addIndexColumn()
                    ->make(true);
            return $dt;
        }
        $roles=  \Spatie\Permission\Models\Role::where('is_backend_role', true)->get();
        $columns = $this->getAdminColumns();
        return view('admin.administration.users', compact('columns','roles'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $user  = User::where($where)->with('roles')->first();
        return Response::json($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $data = array();
        $reset_password=false;
        if($user_id == 0 || empty($user_id)){
            $reset_password=true;
            $data['password'] =  Hash::make($request->password);
        }
		 else{
			 if(!empty($request->password))
			 {
				 $data['password'] =  Hash::make($request->password);
			 }
			 else{
					unset($data['password']);
		 }
		 }
        $data['name'] =  $request->name;
        $data['email'] =  $request->email;
        $user   =  User::updateOrCreate(['id' => $user_id], $data);
        if($reset_password){
            $token = Password::getRepository()->create($user);
            // $user->sendPasswordResetNotification($token);
        }
        $user->syncRoles(array($request->role));
        return Response::json($user);
    }



    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
        return Response::json($user);
    }

    protected function getAdminColumns(): array
    {
        return [
            ['data' => 'id', 'name' => 'id', 'visible' => false, 'th' => '#', 'priority'=> 2, 'orderable' => false],
            ['data' => 'name', 'name' => 'name', 'th' =>  __('admin.datatables.name') , 'priority'=> 1, 'orderable' => true],
            ['data' => 'email', 'name' => 'email', 'th' =>  __('admin.datatables.users.email'), 'priority'=> 2, 'orderable' => true],
            ['data' => 'role', 'name' => 'role', 'th' =>  __('admin.datatables.users.role'), 'priority'=> 2, 'orderable' => true],
            ['data' => 'action', 'name' => 'action', 'th' =>  __('admin.datatables.action'), 'priority'=> 1, 'orderable' => false],
        ];
    }


    protected function make_admin_query(Request $request)
    {
        $results = User::select('id','name','email')->whereHas('roles', function($q) {
                        $q->whereNotIn('name', ['driver']);
                    })->get();
        return $results;
    }


}
