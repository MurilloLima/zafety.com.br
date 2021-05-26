@extends('panel.layouts.app' ,['activePage' => 'user.reuniao.index'])
@section('title', 'ATA Reunião')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ATA Reunião</h1>
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
                            <button data-toggle="modal" data-target="#addReuniao" type="button" class="btn btn-default">
                                Adicionar
                            </button>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">ATA Reunião</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @forelse ($reunioes as $item)
                            <div class="card-header" data-toggle="modal" data-target="#addRelatorio{{$item->id}}"
                                style="cursor: pointer">
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
                                {{-- modal relatorio --}}
                                <div class="modal fade" id="addRelatorio{{$item->id}}" tabindex="-2" role="dialog"
                                    aria-labelledby="addRelatorio{{$item->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-lg-between">
                                                <h5 class="modal-title">
                                                    Relatório
                                                </h5>
                                                <h5 class="modal-title" id="editQuarto">
                                                    {{$item->code}}
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <dl>
                                                            <dt>Empresa</dt>
                                                            <dd>{{$item->company->name}}</dd>
                                                            <dt>Area</dt>
                                                            <dd>{{$item->area->name}}</dd>
                                                            <dt>Setor</dt>
                                                            <dd>{{$item->setor->name}}</dd>
                                                            <dt>Tema</dt>
                                                            <dd>{{$item->area->name}}</dd>
                                                            <dt>Data</dt>
                                                            <dd>{{$item->area->name}}</dd>
                                                            <dt>Horário</dt>
                                                            <dd>{{$item->area->name}}</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <dl>
                                                            <dt>Assunto</dt>
                                                            <dd>{{$item->subject}}</dd>

                                                            {{-- topicos repetitiva --}}
                                                            <dt>Tópico</dt>
                                                            <dd>{{$item->area->name}}</dd>
                                                            <dt>Reunião</dt>
                                                            <dd>{{$item->setor->name}}</dd>
                                                            {{-- fim area repetitiva --}}
                                                            
                                                            <dt>Participantes</dt>
                                                            <dd>{{$item->area->name}}</dd>

                                                            <dt>Emitido por</dt>
                                                            <dd>{{$item->user->name}}</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Fechar</button>
                                            </div>

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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!!$reunioes->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal add --}}
<div class="modal fade" id="addReuniao" tabindex="-2" role="dialog" aria-labelledby="addReuniao" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editQuarto">
                    Novo registro
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.reuniao.store') }}" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        @include('panel.user.pages.reuniao._form.form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-default">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection