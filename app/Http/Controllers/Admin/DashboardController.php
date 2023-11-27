<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Transcation;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{

    public function index()
    {

        return view('admin.dashboard.index');
    }
}
