<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($role->name) ? $role->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : ''}}">
    <label for="guard_name" class="control-label">{{ 'Guard Name' }}</label>
    <textarea class="form-control" rows="5" name="guard_name" type="textarea" id="guard_name" >{{ isset($role->guard_name) ? $role->guard_name : ''}}</textarea>
    {!! $errors->first('guard_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
