<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', __('models/productAdvantages.fields.product_id').':') !!}
    <p>{{ $productAdvantage->product_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/productAdvantages.fields.name').':') !!}
    <p>{{ $productAdvantage->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/productAdvantages.fields.created_at').':') !!}
    <p>{{ $productAdvantage->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/productAdvantages.fields.updated_at').':') !!}
    <p>{{ $productAdvantage->updated_at }}</p>
</div>

