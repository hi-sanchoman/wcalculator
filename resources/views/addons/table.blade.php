<div class="table-responsive">
    <table class="table" id="addons-table">
        <thead>
            <tr>
                <th>@lang('models/addons.fields.category_id')</th>
                <th>@lang('models/addons.fields.slug')</th>
                <th>@lang('models/addons.fields.name')</th>
                <th>@lang('models/addons.fields.price')</th>
                <th>@lang('models/addons.fields.type')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($addons as $addon)
            <tr>
                <td>{{ $addon->category->name }}</td>
                <td>{{ $addon->slug }}</td>
                <td>{{ $addon->name }}</td>
                <td>{{ $addon->price }}</td>
                <td>{{ $addon->type }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['addons.destroy', $addon->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       <a href="{!! route('addons.show', [$addon->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                       <a href="{!! route('addons.edit', [$addon->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                       {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
