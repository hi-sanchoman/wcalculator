<div class="table-responsive">
    <table class="table" id="productAdvantages-table">
        <thead>
            <tr>
                <th>@lang('models/productAdvantages.fields.name')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($product->advantages as $advantage)
            <tr>
                <td>{{ $advantage->name }}</td>
                <td class=" text-center">
                   {!! Form::open(['route' => ['products.advantages.destroy', [$product->id, $advantage->id]], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.advantages.edit', [$product->id, $advantage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
