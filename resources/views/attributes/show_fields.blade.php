<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', __('models/attributes.fields.product_id').':') !!}
    <p>{{ $attribute->product_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/attributes.fields.name').':') !!}
    <p>{{ $attribute->name }}</p>
</div>

<!-- Others Field -->
<div class="form-group">
    {!! Form::label('others', __('models/attributes.fields.others').':') !!}
    <p>{{ $attribute->others }}</p>
</div>

<!-- Ourselves Field -->
<div class="form-group">
    {!! Form::label('ourselves', __('models/attributes.fields.ourselves').':') !!}
    <p>{{ $attribute->ourselves }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/attributes.fields.created_at').':') !!}
    <p>{{ $attribute->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/attributes.fields.updated_at').':') !!}
    <p>{{ $attribute->updated_at }}</p>
</div>

