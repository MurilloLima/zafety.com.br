<div class="row">
    <div class="col-md-6">
        <label>{{ __('Proteção para') }}</label>
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
        <label>{{ __('Tipo') }}</label>
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
        <label>{{ __('Equipamento') }}</label>
        <div class="form-group{{ $errors->has('equipamento') ? ' has-danger' : '' }}">
            <select name="equipamento" class="form-control {{ $errors->has('equipamento') ? ' has-danger' : '' }}" required>
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
                value="{{old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <label>{{ __('Horário') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours" type="time"
                value="{{old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
</div>
