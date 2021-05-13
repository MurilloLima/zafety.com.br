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
        <label>{{ __('Assunto') }}</label>
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

<div class="row">
    <div class="col-md-12">
        <label>{{ __('Reunião') }}</label>
        <div class="form-group">
            <textarea name="reuniao" class="form-control" rows="5">
                {{$data->obs ?? old('reuniao')}}
            </textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Participantes') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <select name="" class="form-control">
                <option value=""></option>
            </select>
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
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
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Observação') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
</div>