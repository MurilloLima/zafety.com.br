@extends('panel.layouts.app' ,['activePage' => 'user.inspecao.index'])
@section('title', 'Inspeção')

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
                        <li class="breadcrumb-item active">Inspeção</li>
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
                    <div class="card card-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Furadeira</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Martelete</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">oAC</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Empilhadeira</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Guindaste</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Cinto de Seg.</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Andaime</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Maq. solda</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Esmetrilhadeira</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Fer. Manual</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">COVID-19</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Trator</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Serra</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </a>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <a href="{{ route('user.ar-pt.icamento') }}">
                                        <div class="info-box bg-purple">
                                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Munck</span>
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
        </div>
    </div>
</div>
@endsection