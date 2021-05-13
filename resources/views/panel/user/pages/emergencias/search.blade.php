@extends('panel.layouts.app' ,['activePage' => 'user.ocorrencias.index'])
@section('title', 'Pesquisar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pesquisar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('panel.includes.alerts')
                    <div class="row">
                        <div class="col-md-12 text-right" style="margin-bottom: 10px;">
                            <a href="{{ route('user.reuniao.create') }}" class="btn btn-info">
                                Nova Pesquisar
                            </a>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-body">
                            {!! Form::open(['route'=>'user.ocorrencias.search']) !!}
                            @include('panel.user.pages.emergencias._form.search')
                            <button class="btn btn-info"><i class="fa fa-search"></i> Pesquisar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-info card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                        aria-selected="true">Equipamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-one-profile" role="tab"
                                        aria-controls="custom-tabs-one-profile" aria-selected="false">Simulados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-one-messages" role="tab"
                                        aria-controls="custom-tabs-one-messages" aria-selected="false">Pendentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-one-messages" role="tab"
                                        aria-controls="custom-tabs-one-messages" aria-selected="false">Realizados</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    ATA 035/2021
                                                </div>
                                                <div class="col-md-4">
                                                    21/02/2021 13:53
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    ATA 035/2021
                                                </div>
                                                <div class="col-md-4">
                                                    21/02/2021 13:53
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    ATA 035/2021
                                                </div>
                                                <div class="col-md-4">
                                                    21/02/2021 13:53
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-messages-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    ATA 035/2021
                                                </div>
                                                <div class="col-md-4">
                                                    21/02/2021 13:53
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-one-messages-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                ATA 035/2021
                                            </div>
                                            <div class="col-md-4">
                                                21/02/2021 13:53
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <i class="fas fa-angle-right"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection