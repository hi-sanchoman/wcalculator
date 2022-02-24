<div class="table-responsive">
    <table class="table" id="attributes-table">
        <thead>
            <tr>
                <th>@lang('models/attributes.fields.name')</th>
                <th>@lang('models/attributes.fields.others')</th>
                <th>@lang('models/attributes.fields.ourselves')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($product->attributes as $attribute)
            <tr>
                <td>{{ $attribute->name }}</td>
                <td>{{ $attribute->others }}</td>
                <td>{{ $attribute->ourselves }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['products.attributes.destroy', [$product->id, $attribute->id]], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.attributes.edit', [$product->id, $attribute->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
