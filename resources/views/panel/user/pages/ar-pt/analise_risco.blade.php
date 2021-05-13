@extends('panel.layouts.app', ['activePage' => 'user.ar-pt.index'])
@section('title', 'Análise de Risco')

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
                        <li class="breadcrumb-item active">Análise de Risco</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    @include('panel.includes.alerts')
                    <div class="card card-info">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Análise de Risco</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                {!! Form::open(['route'=>'user.epi.store']) !!}
                                <div class="modal-body">
                                    @include('panel.user.pages.ar-pt._form.form_analise_risco')
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection