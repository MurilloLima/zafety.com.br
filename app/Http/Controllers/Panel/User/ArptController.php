<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        return view('panel.user.pages.ar-pt.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function analise_risco()
    {
        return view('panel.user.pages.ar-pt.analise_risco');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function trabalho_altura()
    {
        return view('panel.user.pages.ar-pt.trabalho_altura');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function servico_quente()
    {
        return view('panel.user.pages.ar-pt.servico_quente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function espaco_confinado()
    {
        return view('panel.user.pages.ar-pt.espacos_confinado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function icamento()
    {
        return view('panel.user.pages.ar-pt.icamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eletrica()
    {
        return view('panel.user.pages.ar-pt.eletrica');
    }

    public function escavacao()
    {
        return view('panel.user.pages.ar-pt.escavacao');
    }
}
