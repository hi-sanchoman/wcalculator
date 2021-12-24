<div class="table-responsive">
    <table class="table" id="managers-table">
        <thead>
            <tr>
                <th>@lang('models/managers.fields.fullname')</th>
        <th>@lang('models/managers.fields.photo')</th>
        <th>@lang('models/managers.fields.specialty')</th>
        <th>@lang('models/managers.fields.phone')</th>
        <th>@lang('models/managers.fields.email')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($managers as $manager)
            <tr>
                <td>{{ $manager->fullname }}</td>
                <td><img src="{{ asset($manager->photo) }}" style="width: 120px;"></td>
                <td>{{ $manager->specialty }}</td>
                <td>{{ $manager->phone }}</td>
                <td>{{ $manager->email }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['managers.destroy', $manager->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       <a href="{!! route('managers.show', [$manager->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                       <a href="{!! route('managers.edit', [$manager->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                       {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
           </tr>
        @endforeach
        </tbody>
    </table>
</div>
