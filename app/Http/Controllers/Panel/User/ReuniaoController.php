<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Company;
use App\Models\File;
use App\Models\Meeting;
use App\Models\Meeting_report;
use App\Models\Role;
use App\Models\Role_user;
use App\Models\Sector;
use App\Models\Theme;
use App\User;
use DateTime;
use Keygen\Keygen;

class ReuniaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Meeting_report $meeting)
    {
        $date = date('d/m/Y');
        $time = date('H:i:s');

        //pega role user
        $role_users = Role_user::where('user_id', auth()->user()->id)->first();

        //pega o role
        $role = Role::where('id', $role_users->role_id)->first();
        //pega a empresa
        $company = Company::where('id', $role->company_id)->first();
       
        //pega areas
        $areas = $company->areas->pluck('name','id');
        //pega setores
        $setores = $company->setores->pluck('name','id');

        //pega temas
        $temas = $company->themas->pluck('name','id');

        //pega reunioes
        $reunioes = $company->reunioes()->paginate();

        return view('panel.user.pages.reuniao.index', compact('reunioes', 'areas', 'setores', 'temas', 'date', 'time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.user.pages.reuniao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Meeting_report $meeting)
    {
        $time =  $request->get('time');
        $date =  $request->get('date');
        $myDateTime = DateTime::createFromFormat('d/m/Y', $date);
        $formattedweddingdate = $myDateTime->format('Y/m/d') . ' ' . $time;
        $date_time = str_replace('/', '-', $formattedweddingdate);

        $key = Keygen::numeric(4)->generate();

        $data = $meeting->create([
            'code' => 'ATA' . ' ' . $key . '/' . date('Y'),
            'subject' => $request->get('subject'),
            'date_time' => $date_time,
            'owner_id' => auth()->user()->id,
            'theme_id' => $request->get('theme_id'),
            'area_id' => $request->get('area_id'),
            'sector_id' => $request->get('sector_id'),
            // 'company_id' => ,

        ]);
        return redirect()->back()->with('success', 'Registro cadastrado com sucesso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
