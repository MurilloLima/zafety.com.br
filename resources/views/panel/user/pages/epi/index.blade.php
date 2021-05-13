@extends('panel.layouts.app' ,['activePage' => 'user.epi.index'])
@section('title', 'Equipamento de proteção individual')

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
                        <li class="breadcrumb-item active">Equipamento de proteção individual</li>
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
                            <a href="{{ route('user.epi.create') }}" class="btn btn-info">
                                Adicionar novo
                            </a>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-body">
                            {!! Form::open(['route'=>'user.reuniao.search']) !!}
                            @include('panel.user.pages.epi._form.search')
                            <button class="btn btn-info"><i class="fa fa-search"></i> Pesquisar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Equipamento de proteção individual</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>status</th>
                                            <th>Data</th>
                                            <th>Horário</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                        <tr>
                                            <td><a href="">{{$item->id}}</a></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->hours}}</td>
                                            <td>
                                                <a href="{{ route('agenda.edit', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('agenda.destroy', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Deletar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Nenhum cadastrada no momento!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row justify-content-end">
                                    {{-- {{ $data->links() }} --}}
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