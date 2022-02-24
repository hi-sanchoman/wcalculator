<div class="table-responsive">
    <table class="table" id="inners-table">
        <thead>
            <tr>
                <th>@lang('models/inners.fields.name')</th>
                <th>@lang('models/inners.fields.status')</th>
                <th>@lang('models/inners.fields.price')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($product->inners as $inner)
            <tr>
                <td>{{ $inner->name }}</td>
                <td>{{ $inner->status }}</td>
                <td>{{ $inner->price }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['products.inners.destroy', [$product->id, $inner->id]], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.inners.edit', [$product->id, $inner->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
