<div class="table-responsive">
    <table class="table" id="increments-table">
        <thead>
            <tr>
                <th>@lang('models/increments.fields.product_id')</th>
                <th>@lang('models/increments.fields.name')</th>
                <th>@lang('models/increments.fields.width')</th>
                <th>@lang('models/increments.fields.price')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($increments as $increment)
            <tr>
                <td>{{ $increment->product->name }}</td>
                <td>{{ $increment->name }}</td>
                <td>{{ $increment->width }}</td>
                <td>{{ $increment->price }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['increments.destroy', $increment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       <a href="{!! route('increments.show', [$increment->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                       <a href="{!! route('increments.edit', [$increment->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                       {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
