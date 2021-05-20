<div class="row">
    <div class="col-md-6">
        <label>{{ __('Área') }}</label>
        <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
            {!! Form::select('area_id', $areas, NULL, ['class'=>'form-control']) !!}

            @if ($errors->has('area'))
            <span id="area-error" class="error text-danger">{{ $errors->first('area') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <label>{{ __('Setor') }}</label>
        <div class="form-group{{ $errors->has('setor') ? ' has-danger' : '' }}">
            {!! Form::select('sector_id', $sectors, NULL, ['class'=>'form-control']) !!}
            @if ($errors->has('setor'))
            <span id="email-error" class="error text-danger">{{ $errors->first('setor') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label>{{ __('Tema') }}</label>
        <div class="form-group{{ $errors->has('tema') ? ' has-danger' : '' }}">
            {!! Form::select('theme_id', $themes, NULL, ['class'=>'form-control']) !!}

            @if ($errors->has('tema'))
            <span id="tema-error" class="error text-danger">{{ $errors->first('tema') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Data') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$date}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <label>{{ __('Horário') }}</label>
        <div class="form-group{{ $errors->has('time') ? ' has-danger' : '' }}">
            <input class="form-control time{{ $errors->has('time') ? ' has-danger' : '' }}" name="time"
                type="datetime-local" value="{{$time}}" required />
            @if ($errors->has('time'))
            <span id="email-error" class="error text-danger">{{ $errors->first('time') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Assunto') }}</label>
        <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('date') ? ' has-danger' : '' }}" name="subject" type="text"
                value="{{$data->subject ?? old('subject')}}" required />
            @if ($errors->has('subject'))
            <span id="email-error" class="error text-danger">{{ $errors->first('subject') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Topico') }}</label>
        <div class="form-group{{ $errors->has('topico') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('topico') ? ' has-danger' : '' }}" name="topico" type="text"
                value="{{$data->topico ?? old('date')}}" required />
            @if ($errors->has('topico'))
            <span id="email-error" class="error text-danger">{{ $errors->first('topico') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Reunião') }}</label>
        <div class="form-group">
            <textarea name="text" class="form-control" rows="5">{{$data->text ?? old('text')}}</textarea>
        </div>
    </div>
</div>