<div class="form-group row">
    <label for="fname"
        class="col-sm-3 text-end control-label col-form-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" name="firstname" id="fname"
            placeholder="First Name Here"  value="{{ old('firstname', $user->firstname ?? null) }}">
    </div>
</div>
<div class="form-group row">
    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
        Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" name="lastname" id="lname"
            placeholder="Last Name Here"  value="{{ old('lastname', $user->lastname ?? null) }}">
    </div>
</div>

 <div class="form-group row">
          
    <label for="email" class="col-sm-3 text-end control-label col-form-label">Email </label>
    <div class="col-sm-9">
    <input id="email" name="email" type="text" autocomplete="false"
     class="required email form-control"  placeholder="Email@email.com"
     value="{{ old('email', $user->email ?? null) }}" >
    </div>
        </div>
        <div class="form-group row">
            <label for="cono1"
                class="col-sm-3 text-end control-label col-form-label">Contact No</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="contact" id="cono1"
                    placeholder="Contact No Here" value="{{ old('contact', $user->contact ?? null) }}">
            </div>
        </div>

<div class="form-group row">
    <label class="col-md-3">Gender</label>
    <div class="col-md-9">
        <div class="form-check">
            <input type="radio" class="form-check-input"
                id="gender" name="gender" value="male" required  {{ old('gender') == 'male' ? 'checked' : '' }}>
            <label class="form-check-label mb-0" for="gender"  >Male</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input"
                id="gender2" name="gender" value="femmel" required {{ old('gender') == 'femmel' ? 'checked' : '' }}>
            <label class="form-check-label mb-0" for="gender2">Femmel</label>
        </div>
       
    </div>
</div>


<div class="form-group row">
    <label class="col-md-3 mt-3" for="role">Select Role</label>
    <div class="col-md-9">
        <select class="select2 form-select shadow-none" id="role" name="role" {{ (! empty(old('role')) ? 'selected' : '') }}
            style="width: 100%; height:36px;"  >
            <option>-------------------------</option>
                <option  value="role 1" >Role 1</option>
                <option  value="role 2" >Role 2</option>
                <option value="role 3" >Role 3</option>
                <option value="role 4" >Role 4</option>           
        </select>
    </div>
</div>
