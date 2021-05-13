<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OcorrenciaController extends Controller
{
    public function index()
    {
        $data = [];
        return view('panel.user.pages.ocorrencias.index', compact('data'));
        # code...
    }
}
