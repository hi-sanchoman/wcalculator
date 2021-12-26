<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/products.fields.category_id').':') !!}
    {!! Form::select('category_id', App\Models\Category::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', __('models/products.fields.slug').':') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/products.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/products.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/products.fields.type').':') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('width', __('models/products.fields.width').':') !!}
    {!! Form::text('width', null, ['class' => 'form-control']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', __('models/products.fields.size').':') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
</div>

<!-- Price El Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_el', __('models/products.fields.price_el').':') !!}
    {!! Form::text('price_el', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Kedr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_kedr', __('models/products.fields.price_kedr').':') !!}
    {!! Form::number('price_kedr', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 1 Field -->
<div class="form-group col-sm-6">
    @if (isset($product) && $product->img_1 != null)
        <img src="{{ asset($product->img_1) }}" style="width: 120px;">
        <br><br>
    @endif

    {!! Form::label('img_1', __('models/products.fields.img_1').':') !!}
    {!! Form::file('img_1') !!}
</div>
<div class="clearfix"></div>

<!-- Img 2 Field -->
<div class="form-group col-sm-6">
    @if (isset($product) && $product->img_2 != null)
        <img src="{{ asset($product->img_2) }}" style="width: 120px;">
        <br><br>
    @endif

    {!! Form::label('img_2', __('models/products.fields.img_2').':') !!}
    {!! Form::file('img_2') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
