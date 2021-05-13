<div class="row">
    <div class="col-md-6">
        <label>{{ __('Pesquisar') }}</label>
        <div class="form-group{{ $errors->has('search') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('palavra_chave') ? ' has-danger' : '' }}" name="search" type="text"
            value="{{old('search')}}" required />
            @if ($errors->has('search'))
            <span id="email-error" class="error text-danger">{{ $errors->first('search') }}</span>
            @endif
        </div>
    </div>
</div>