<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Role;
use App\Models\Role_user;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pega role user
        $role_users = Role_user::where('user_id', auth()->user()->id)->first();

        //pega o role
        $role = Role::where('id', $role_users->role_id)->first();
        //pega a empresa
        $company = Company::where('id', $role->company_id)->first();
        return view('panel.index', compact('company'));
    }
}
