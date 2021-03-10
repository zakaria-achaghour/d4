<div class="form-group row">
    <label for="firstname"
        class="col-sm-3 text-end control-label col-form-label">{{__('Firstname')}}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname"
            placeholder="{{__('Firstname Here')}}"  value="{{ old('firstname', $user->firstname ?? null) }}">
            @error('firstname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="lastname" class="col-sm-3 text-end control-label col-form-label">{{__('Lastname')}}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control @error('lastname') is-invalid @enderror"name="lastname" id="lastname"
            placeholder="{{__('Lastname Here')}}"  value="{{ old('lastname', $user->lastname ?? null) }}">
            @error('lastname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

 <div class="form-group row">
          
    <label for="email" class="col-sm-3 text-end control-label col-form-label">{{__('E-mail')}} </label>
    <div class="col-sm-9">
    <input id="email" name="email" type="text" autocomplete="false"
     class="form-control @error('email') is-invalid @enderror"  placeholder="email@email.com"
     value="{{ old('email', $user->email ?? null) }}" >
     @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
     @enderror
    </div>
        </div>
        <div class="form-group row">
            <label for="cono1"
                class="col-sm-3 text-end control-label col-form-label">{{__('Contact')}}</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" id="cono1"
                    placeholder="+ 212 6 ..." value="{{ old('contact', $user->contact ?? null) }}">
                    @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

       
<div class="form-group row">
    <label class="col-md-3">{{__('Gender')}}</label>
    <div class="col-sm-9">
        <div class="form-check form-check-inline">
            <label class="form-check-label mb-0" for="gender"  >
            <input type="radio" class="form-check-input form-control @error('gender') is-invalid @enderror"
                id="gender" name="gender" value="male" required checked {{ old('gender') == 'male' ? 'checked' : '' }}>
               {{__('Male')}}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label mb-0" for="gender2">

            <input type="radio" class="form-check-input form-control @error('gender') is-invalid @enderror"
                id="gender2" name="gender" value="women" required {{ old('gender') == 'women' ? 'checked' : '' }}>
        
                {{__('Women')}}</label>        
            </div>

            @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
       
    </div>
</div>


<div class="form-group row">
    <label class="col-md-3 mt-3" for="role">{{__('Select Role')}}</label>
    <div class="col-sm-9">
        <select class="select2 form-select shadow-none form-control @error('role') is-invalid @enderror" id="role" name="role"
            style="width: 100%; height:36px;"  >
            
           @foreach (App\User::ROLES as $role => $label)
           <option value=""></option>
            <option value="{{ $role }}" {{ old('role') === $role ? 'selected':'' }} >{{ $label }}</option>
               
           @endforeach
                  
        </select>
        @error('role')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>
