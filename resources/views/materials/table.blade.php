<div class="table-responsive">
    <table class="table" id="materials-table">
        <thead>
            <tr>
                <th>@lang('models/materials.fields.category_id')</th>
                <th>@lang('models/materials.fields.name')</th>
                <th>@lang('models/materials.fields.slug')</th>
                <th>@lang('models/materials.fields.from_what')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{ $material->category->name }}</td>
                <td>{{ $material->name }}</td>
                <td>{{ $material->slug }}</td>
                <td>{{ $material->from_what }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['materials.destroy', $material->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       <a href="{!! route('materials.show', [$material->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                       <a href="{!! route('materials.edit', [$material->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                       {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
