@extends('panel.layouts.app' ,['activePage' => 'user.ar-pt.index'])
@section('title', 'Permissão de trabalho')

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
                        <li class="breadcrumb-item active">Permissão de trabalho</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.analise_risco') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fa fa-search"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Análise de risco</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.trabalho_altura') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fas fa-people-carry"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Trabalho em altura</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.servico_quente') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Serviço a quente</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.espaco_confinado') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Espaços confinado</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.icamento') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Içamentos</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.eletrica') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fas fa-charging-station"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Eletrica</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.ar-pt.escavacao') }}">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Escavação</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection