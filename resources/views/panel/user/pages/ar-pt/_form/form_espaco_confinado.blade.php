<div class="row">
    <div class="col-md-6">
        <label>{{ __('Area') }}</label>
        <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
            <select name="para" class="form-control {{ $errors->has('para') ? ' has-danger' : '' }}" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>

            @if ($errors->has('para'))
            <span id="area-error" class="error text-danger">{{ $errors->first('para') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <label>{{ __('Setor') }}</label>
        <div class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }}">
            <select name="tipo" class="form-control {{ $errors->has('tipo') ? ' has-danger' : '' }}" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            @if ($errors->has('tipo'))
            <span id="email-error" class="error text-danger">{{ $errors->first('tipo') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label>{{ __('Descrição da atividade') }}</label>
        <div class="form-group{{ $errors->has('equipamento') ? ' has-danger' : '' }}">
            <select name="equipamento" class="form-control {{ $errors->has('equipamento') ? ' has-danger' : '' }}"
                required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            @if ($errors->has('equipamento'))
            <span id="tema-error" class="error text-danger">{{ $errors->first('equipamento') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Data') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="date"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <label>{{ __('Horário') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours" type="time"
                value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Purga e lavagem
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Ventilação / Exaustão - Tipo do equipamento
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Resposta" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Ilunicação adequada (NR33)
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Isolado/Sinalizado o local do serviço
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Equipamento de monitoramento continuo de gases intrinsicamente seguro (à prova de explosão)
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Instalado equipamento de resgate
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Trabalhadores capacitados conforme NR33
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                EPIs de acordo com a atividade
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Manter extintores de incêndios próximo ao local
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Cinturão de segurança e linhas de vida para equipe de resgate
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Acesso ao local oference condições seguras
            </div>
            <div class="col-md-4">
                <div class="form-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Não</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">N/A</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                Procedimento de comunicação (Qual).
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Resposta" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                VIGIA do espaço confinado
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Resposta" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Observações') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12">
    <label>{{ __('Participante') }}</label>
    <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
        <select name="para" class="form-control {{ $errors->has('para') ? ' has-danger' : '' }}" required>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>

        @if ($errors->has('para'))
        <span id="area-error" class="error text-danger">{{ $errors->first('para') }}</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Participantes não cadastrados') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
</div>