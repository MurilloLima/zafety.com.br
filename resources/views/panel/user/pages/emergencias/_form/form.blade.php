<div class="row">
    <div class="col-md-6">
        <label>{{ __('Área') }}</label>
        <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
            <select name="area" class="form-control {{ $errors->has('area') ? ' has-danger' : '' }}" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>

            @if ($errors->has('area'))
            <span id="area-error" class="error text-danger">{{ $errors->first('area') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <label>{{ __('Setor') }}</label>
        <div class="form-group{{ $errors->has('setor') ? ' has-danger' : '' }}">
            <select name="setor" class="form-control {{ $errors->has('setor') ? ' has-danger' : '' }}" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            @if ($errors->has('setor'))
            <span id="email-error" class="error text-danger">{{ $errors->first('setor') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label>{{ __('Tipo') }}</label>
        <div class="form-group{{ $errors->has('tema') ? ' has-danger' : '' }}">
            <select name="tema" class="form-control {{ $errors->has('tema') ? ' has-danger' : '' }}" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            @if ($errors->has('tema'))
            <span id="tema-error" class="error text-danger">{{ $errors->first('tema') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Capacidade') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <label>{{ __('T.H') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours" type="text"
                value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label>{{ __('N de fabricação') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Carregado') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Próx. Recarga') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Localização') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
</div>