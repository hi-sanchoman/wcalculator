<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', __('models/addons.fields.category_id').':') !!}
    <p>{{ $addon->category_id }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', __('models/addons.fields.slug').':') !!}
    <p>{{ $addon->slug }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/addons.fields.name').':') !!}
    <p>{{ $addon->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/addons.fields.price').':') !!}
    <p>{{ $addon->price }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/addons.fields.type').':') !!}
    <p>{{ $addon->type }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/addons.fields.created_at').':') !!}
    <p>{{ $addon->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/addons.fields.updated_at').':') !!}
    <p>{{ $addon->updated_at }}</p>
</div>

