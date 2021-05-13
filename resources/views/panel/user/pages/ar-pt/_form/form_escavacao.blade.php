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
                Solo poluído por hidrocarbonetos
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
                Queda de rochas/pedras
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
                Desbaste
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
                Hidrocarbonetos gasosos
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
                Presença de cabo elétricos
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
                Presença de cabos de Telefonia
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
                Presença de cabos de televisão
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
                Presença de tubos (Produtos, gás, água, resídos)
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
                Presença de piezómetros enterrados (Ao nível do solo)
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
                Outros
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
                Estudos de planos contendo a localização e o tipo de redes existentes
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
                Escavação manual de reconhecimento
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
                Exclusivamente escavação manual
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
                Guia contínuo do operador da máquina
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
                Cimbre
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
                Blindagem
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
                Bombeamento
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
                Marcação (Faixas refletoras. barreiras)
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