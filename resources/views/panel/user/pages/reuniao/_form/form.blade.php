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
        <div class="form-group{{ $errors->has('setor') ? ' has-danger' : '' }}">
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
            <input class="form-control" name="subject" type="text" value="{{$data->subject ?? old('subject')}}"
                required />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"><label>Topico</label>
        <div class="input-group input-group-btn"><input type="text" name="topico" class="form-control">
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
        <div class="form-group"><textarea name="text" class="form-control"
                rows="5">{{$data->text ?? old('text')}}</textarea></div>
    </div>
</div>

<fieldset id="inputs_adicionais"></fieldset>

<style type="text/css">
    fieldset {
        border: none;
    }

    label {
        display: block;
    }

    .remove {
        color: black;
        font-weight: bold;
        text-decoration: none;
    }
</style>
{{-- script add inputs--}}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    
        var input = '<div class="row"><div class="col-md-12"><label>Topico</label><div class="input-group input-group-btn"><input type="text" name="topico[]" class="form-control"><span class="input-group-append"><a href="#" class="remove btn btn-danger btn-flat"><i class="fas fa-trash-alt"></i></a></span></div></div></div><div class="row"><div class="col-md-12"><label>Reunião</label><div class="form-group"><textarea name="text[]" class="form-control" rows="5">{{old('text')}}</textarea></div></div></div>';
    
        $("button[name='add']").click(function(e){
            $('#inputs_adicionais').append(input);
        });
    
        $('#inputs_adicionais').delegate('a','click',function(e){
            e.preventDefault();
            $(this).parent('label').remove();
        });
    
    });
</script>

