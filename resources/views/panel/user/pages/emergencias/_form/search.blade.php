<div class="row">
    <div class="col-md-4">
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
    <div class="col-md-4">
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
    <div class="col-md-2">
        <label>{{ __('De') }}</label>
        <div class="form-group{{ $errors->has('de') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('de') ? ' has-danger' : '' }}" name="de" type="date"
            value="{{old('date')}}" required />
            @if ($errors->has('de'))
            <span id="de-error" class="error text-danger">{{ $errors->first('de') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-2">
        <label>{{ __('Até') }}</label>
        <div class="form-group{{ $errors->has('ate') ? ' has-danger' : '' }}">
            <input class="form-control date{{ $errors->has('ate') ? ' has-danger' : '' }}" name="ate" type="date"
            value="{{old('date')}}" required />
            @if ($errors->has('ate'))
            <span id="email-error" class="error text-danger">{{ $errors->first('ate') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>{{ __('Palavra chave') }}</label>
        <div class="form-group{{ $errors->has('palavra_chave') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('palavra_chave') ? ' has-danger' : '' }}" name="palavra_chave" type="text"
            value="{{old('palavra_chave')}}" required />
            @if ($errors->has('palavra_chave'))
            <span id="email-error" class="error text-danger">{{ $errors->first('palavra_chave') }}</span>
            @endif
        </div>
    </div>
</div>