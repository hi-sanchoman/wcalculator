<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', __('models/increments.fields.product_id').':') !!}
    <p>{{ $increment->product_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/increments.fields.name').':') !!}
    <p>{{ $increment->name }}</p>
</div>

<!-- Width Field -->
<div class="form-group">
    {!! Form::label('width', __('models/increments.fields.width').':') !!}
    <p>{{ $increment->width }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/increments.fields.price').':') !!}
    <p>{{ $increment->price }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/increments.fields.created_at').':') !!}
    <p>{{ $increment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/increments.fields.updated_at').':') !!}
    <p>{{ $increment->updated_at }}</p>
</div>

