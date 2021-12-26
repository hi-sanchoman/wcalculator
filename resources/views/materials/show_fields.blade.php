<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', __('models/materials.fields.category_id').':') !!}
    <p>{{ $material->category_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/materials.fields.name').':') !!}
    <p>{{ $material->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', __('models/materials.fields.slug').':') !!}
    <p>{{ $material->slug }}</p>
</div>

<!-- From What Field -->
<div class="form-group">
    {!! Form::label('from_what', __('models/materials.fields.from_what').':') !!}
    <p>{{ $material->from_what }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/materials.fields.created_at').':') !!}
    <p>{{ $material->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/materials.fields.updated_at').':') !!}
    <p>{{ $material->updated_at }}</p>
</div>

