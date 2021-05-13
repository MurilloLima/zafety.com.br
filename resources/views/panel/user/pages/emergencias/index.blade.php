@extends('panel.layouts.app' ,['activePage' => 'user.emergencias.index'])
@section('title', 'Emergências')

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
                        <li class="breadcrumb-item active">Emergências</li>
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
                    <a href="{{ route('user.emergencia.create') }}">
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fa fa-tools"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Cadastro de equipamentos</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.emergencias.relatorio') }}">
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Relatório de simulado</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="{{ route('user.emergencias.search') }}">
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fa fa-search"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pesquisar</span>
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
@endsection