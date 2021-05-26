@extends('panel.layouts.app', ['activePage' => 'panel.index'])
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 255px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Painel v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <a href="{{ route('user.hse.index') }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1 p-2">
                                <img src="{{ asset('assets/admin/icons/hse.png') }}" alt="">
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">HSE</span>
                                <span class="info-box-number">
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <a href="{{ route('user.rh.index') }}">
                        <div class="info-box mb-6">
                            <span class="info-box-icon bg-danger elevation-1 p-2">
                                <img src="{{ asset('assets/admin/icons/rh.png') }}" alt="">
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">RH</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="col-12 col-sm-6 col-md-6">
                    <a href="{{ route('user.qualidade.index') }}">
                        <div class="info-box mb-6">
                            <span class="info-box-icon bg-orange elevation-1 p-2">
                                <img src="{{ asset('assets/admin/icons/qualidade.png') }}" alt="">

                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">QUALIDADE</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <a href="{{ route('user.producao.index') }}">
                        <div class="info-box mb-6">
                            <span class="info-box-icon bg-info elevation-1 p-2">
                                <img src="{{ asset('assets/admin/icons/producao.png') }}" alt="">

                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">PRODUÇÃO</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    <img src="{{ URL('https://api.zafetyapp.com/files/' . $company->path) }}" width="220" alt="">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection