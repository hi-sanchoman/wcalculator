<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/inners.fields.product_id').':') !!}
    {!! Form::select('product_id', App\Models\Product::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/inners.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/inners.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/inners.fields.status').':') !!}
    {!! Form::select('status', App\Models\Inner::statusesDropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.inners.index', [$product->id]) }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
