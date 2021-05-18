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
                            <span class="info-box-icon bg-success elevation-1">
                                <i class="fas fa-user-friends"></i>
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
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-address-card"></i>
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
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                   <a href="{{ route('user.qualidade.index') }}">
                    <div class="info-box mb-6">
                        <span class="info-box-icon bg-orange elevation-1">
                            <i class="fas fa-chart-line"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Qualidade</span>
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
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-tools"></i>
                            </span>
    
                            <div class="info-box-content">
                                <span class="info-box-text">Produção</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection