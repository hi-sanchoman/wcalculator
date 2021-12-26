<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', __('models/categories.fields.slug').':') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
