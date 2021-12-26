<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/materials.fields.category_id').':') !!}
    {!! Form::select('category_id', App\Models\Category::dropdown(), null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/materials.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', __('models/materials.fields.slug').':') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- From What Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_what', __('models/materials.fields.from_what').':') !!}
    {!! Form::text('from_what', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materials.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
