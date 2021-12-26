<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/products.fields.category_id').':') !!}
    {!! Form::select('category_id', App\Models\Category::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/increments.fields.product_id').':') !!}
    {!! Form::select('product_id', App\Models\Product::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Material Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material_id', __('models/increments.fields.material_id').':') !!}
    {!! Form::select('material_id', App\Models\Material::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/increments.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('width', __('models/increments.fields.width').':') !!}
    {!! Form::text('width', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/increments.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('increments.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
