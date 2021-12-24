<!-- Fullname Field -->
<div class="form-group">
    {!! Form::label('fullname', __('models/managers.fields.fullname').':') !!}
    <p>{{ $manager->fullname }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', __('models/managers.fields.photo').':') !!}
    <p>{{ $manager->photo }}</p>
</div>

<!-- Specialty Field -->
<div class="form-group">
    {!! Form::label('specialty', __('models/managers.fields.specialty').':') !!}
    <p>{{ $manager->specialty }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/managers.fields.phone').':') !!}
    <p>{{ $manager->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/managers.fields.email').':') !!}
    <p>{{ $manager->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/managers.fields.created_at').':') !!}
    <p>{{ $manager->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/managers.fields.updated_at').':') !!}
    <p>{{ $manager->updated_at }}</p>
</div>

