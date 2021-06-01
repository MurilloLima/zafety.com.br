<input type="hidden" name="company_id" value="{{$company->id}}">
<div class="row">
    <div class="col-md-6">
        <label>{{ __('Área') }}</label>
        <div class="form-group">
            {!! Form::select('area_id', $areas, NULL, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <label>{{ __('Setor') }}</label>
        <div class="form-group">
            {!! Form::select('sector_id', $setores, NULL, ['class'=>'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label>{{ __('Tema') }}</label>
        <div class="form-group">
            {!! Form::select('theme_id', $temas, NULL, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Data') }}</label>
        <div class="form-group">
            <input class="form-control date" name="date" type="text" value="{{$date}}" required />
        </div>
    </div>

    <div class="col-md-3">
        <label>{{ __('Horário') }}</label>
        <div class="form-group">
            <input class="form-control time" name="time" type="text" value="{{$time}}" required />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Assunto') }}</label>
        <div class="form-group">
            <input class="form-control" name="subject" type="text" value="{{old('subject')}}" required />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"><label>Topico</label>
        <div class="input-group input-group-btn"><input type="text" name="topico[]" class="form-control">
            <span class="input-group-append">
                <button type="button" name="add" class="btn btn-info btn-flat">
                    <i class="fa fa-plus"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"><label>{{ __('Reunião') }}</label>
        <div class="form-group"><textarea name="text[]" class="form-control" rows="5">{{old('text')}}</textarea></div>
    </div>
</div>

<fieldset id="inputs_adicionais"></fieldset>

