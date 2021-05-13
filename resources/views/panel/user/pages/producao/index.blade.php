@extends('panel.layouts.app' ,['activePage' => 'user.producao.index'])
@section('title', 'Produção')

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
                        <li class="breadcrumb-item active">Produção</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('panel.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('user.hse.index') }}" title="HSE"><i
                                        class="fas fa-user-friends fa-2x"></i> </a>
                                <a href="{{ route('user.rh.index') }}" title="RH"><i
                                        class="fas fa-address-card fa-2x"></i> </a>
                                <a href="{{ route('user.qualidade.index') }}" title="Qualidade"><i
                                        class="fas fa-chart-line fa-2x"></i>
                                </a>
                                <a href="{{ route('user.producao.index') }}" title="Produção"><i
                                        class="fas fa-tools fa-2x"></i> </a>

                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route'=>'user.reuniao.search']) !!}
                            @include('panel.user.pages.hse._form.search')
                            <button class="btn btn-info"><i class="fas fa-Comment"></i> Enviar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection