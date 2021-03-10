<div class="form-group row">
    <label for="firstname"
        class="col-sm-3 text-end control-label col-form-label">{{__('Name')}}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom"
            placeholder="{{__('Name')}}"  value="{{ old('nom', $user->firstname ?? null) }}">
            @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

