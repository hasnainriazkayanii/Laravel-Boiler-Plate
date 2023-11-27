<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Response;
class ProfileController extends Controller
{

    public function index() {
        $user=User::where("id",auth()->guard('admin')->user()->id)->first();
        // print_r($user);exit;
        return view('admin.profile.index',compact('user'));
    }
    public function store(Request $request)
    {
        $user_id=$request->user_id;
        $data=$request->all();
        if(empty($request->password))
        {
            unset($data["password"]);
        }
        else{
            $data['password'] =  Hash::make($data["password"]);
        }
        $user=User::updateOrCreate(['id' => $user_id], $data);
        return redirect()->route('admin.profile')->with("status",__('admin.messages.success.update_successfully'));
    }
}
