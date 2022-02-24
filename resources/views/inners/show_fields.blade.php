<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', __('models/inners.fields.product_id').':') !!}
    <p>{{ $inner->product_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/inners.fields.name').':') !!}
    <p>{{ $inner->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/inners.fields.price').':') !!}
    <p>{{ $inner->price }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/inners.fields.status').':') !!}
    <p>{{ $inner->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/inners.fields.created_at').':') !!}
    <p>{{ $inner->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/inners.fields.updated_at').':') !!}
    <p>{{ $inner->updated_at }}</p>
</div>

