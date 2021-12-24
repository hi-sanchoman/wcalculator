<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname', __('models/managers.fields.fullname').':') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    @if (isset($manager) && $manager->photo != null)
        <img src="{{ asset($manager->photo) }}" style="width: 120px;">
        <br><br>
    @endif

    {!! Form::label('photo', __('models/managers.fields.photo').':') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Specialty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialty', __('models/managers.fields.specialty').':') !!}
    {!! Form::text('specialty', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/managers.fields.phone').':') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/managers.fields.email').':') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('managers.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
