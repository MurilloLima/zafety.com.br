@extends('panel.layouts.app' ,['activePage' => 'user.hse.index'])
@section('title', 'HSE')

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
                        <li class="breadcrumb-item active">HSE</li>
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
                            <button class="btn btn-default"><i class="fas fa-Comment"></i> Enviar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">João Paulo</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('assets/admin/dist/img/photo2.png') }}" class="img-fluid pad"
                                        alt="">

                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-comment-dots"></i></i>
                                        Comment</button>
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-thumbs-up"></i>
                                        Like</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">João Paulo</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('assets/admin/dist/img/photo2.png') }}" class="img-fluid pad"
                                        alt="">

                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-comment-dots"></i></i>
                                        Comment</button>
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-thumbs-up"></i>
                                        Like</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">João Paulo</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('assets/admin/dist/img/photo2.png') }}" class="img-fluid pad"
                                        alt="">

                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-comment-dots"></i></i>
                                        Comment</button>
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="far fa-thumbs-up"></i>
                                        Like</button>
                                </div>
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