<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'Code' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($item->code) ? $item->code : ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($item->description) ? $item->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_type') ? 'has-error' : ''}}">
    <label for="item_type" class="control-label">{{ 'Item Type' }}</label>
    <input class="form-control" name="item_type" type="text" id="item_type" value="{{ isset($item->item_type) ? $item->item_type : ''}}" >
    {!! $errors->first('item_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_category') ? 'has-error' : ''}}">
    <label for="item_category" class="control-label">{{ 'Item Category' }}</label>
    <input class="form-control" name="item_category" type="text" id="item_category" value="{{ isset($item->item_category) ? $item->item_category : ''}}" >
    {!! $errors->first('item_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('uom') ? 'has-error' : ''}}">
    <label for="uom" class="control-label">{{ 'Uom' }}</label>
    <input class="form-control" name="uom" type="text" id="uom" value="{{ isset($item->uom) ? $item->uom : ''}}" >
    {!! $errors->first('uom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('assigned_user') ? 'has-error' : ''}}">
    <label for="assigned_user" class="control-label">{{ 'Assigned User' }}</label>
    <input class="form-control" name="assigned_user" type="text" id="assigned_user" value="{{ isset($item->assigned_user) ? $item->assigned_user : ''}}" >
    {!! $errors->first('assigned_user', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
