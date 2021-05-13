<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NcController extends Controller
{
    public function index()
    {
        $data = [];
        return view('panel.user.pages.nc.index', compact('data'));
        # code...
    }

    public function create()
    {
        return view('panel.user.pages.nc.create');
    }
}
