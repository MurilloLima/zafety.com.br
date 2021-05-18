@extends('panel.layouts.app' ,['activePage' => 'user.reuniao.index'])
@section('title', 'ATA Reunião')

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
                        <li class="breadcrumb-item active">ATA Reunião</li>
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
                            <a href="{{ route('user.reuniao.create') }}" class="btn btn-default">
                                Adicionar
                            </a>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-body">
                            {!! Form::open(['route'=>'user.reuniao.search']) !!}
                            @include('panel.user.pages.reuniao._form.search')
                            <button class="btn btn-default"><i class="fa fa-search"></i> Pesquisar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @forelse ($data as $item)
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    {{$item->code}}
                                </div>
                                <div class="col-md-4">
                                    {{$item->date_time}}
                                </div>
                                <div class="col-md-4 text-right">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    @empty
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <span>Nenhum registro!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!!$data->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection