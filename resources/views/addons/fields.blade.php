<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/addons.fields.category_id').':') !!}
    {!! Form::select('category_id', App\Models\Category::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', __('models/addons.fields.slug').':') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/addons.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/addons.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/addons.fields.type').':') !!}
    {!! Form::select('type', App\Models\Addon::typeDropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('addons.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
