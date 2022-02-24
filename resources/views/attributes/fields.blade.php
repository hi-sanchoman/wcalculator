<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/attributes.fields.product_id').':') !!}
    {!! Form::select('product_id',App\Models\Product::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/attributes.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Others Field -->
<div class="form-group col-sm-6">
    {!! Form::label('others', __('models/attributes.fields.others').':') !!}
    {!! Form::select('others', App\Models\Attribute::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Ourselves Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ourselves', __('models/attributes.fields.ourselves').':') !!}
    {!! Form::select('ourselves', App\Models\Attribute::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.attributes.index', [$product->id]) }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
