<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', __('models/products.fields.category_id').':') !!}
    <p>{{ $product->category_id }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', __('models/products.fields.slug').':') !!}
    <p>{{ $product->slug }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/products.fields.name').':') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/products.fields.price').':') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/products.fields.type').':') !!}
    <p>{{ $product->type }}</p>
</div>

<!-- Width Field -->
<div class="form-group">
    {!! Form::label('width', __('models/products.fields.width').':') !!}
    <p>{{ $product->width }}</p>
</div>

<!-- Size Field -->
<div class="form-group">
    {!! Form::label('size', __('models/products.fields.size').':') !!}
    <p>{{ $product->size }}</p>
</div>

<!-- Price El Field -->
<div class="form-group">
    {!! Form::label('price_el', __('models/products.fields.price_el').':') !!}
    <p>{{ $product->price_el }}</p>
</div>

<!-- Price Kedr Field -->
<div class="form-group">
    {!! Form::label('price_kedr', __('models/products.fields.price_kedr').':') !!}
    <p>{{ $product->price_kedr }}</p>
</div>

<!-- Img 1 Field -->
<div class="form-group">
    {!! Form::label('img_1', __('models/products.fields.img_1').':') !!}
    <p>{{ $product->img_1 }}</p>
</div>

<!-- Img 2 Field -->
<div class="form-group">
    {!! Form::label('img_2', __('models/products.fields.img_2').':') !!}
    <p>{{ $product->img_2 }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/products.fields.created_at').':') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/products.fields.updated_at').':') !!}
    <p>{{ $product->updated_at }}</p>
</div>

