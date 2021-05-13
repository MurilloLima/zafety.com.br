<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergenciaController extends Controller
{
    public function index()
    {
        $data = [];
        return view('panel.user.pages.emergencias.index', compact('data'));
        # code...
    }

    public function create()
    {
        return view('panel.user.pages.emergencias.create');
        # code...
    }

    public function search()
    {
        return view('panel.user.pages.emergencias.search');
        # code...
    }

    public function Relatorio()
    {
        return view('panel.user.pages.emergencias.relatorio');
        # code...
    }
}
