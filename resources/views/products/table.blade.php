<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>@lang('models/products.fields.category_id')</th>
                <th>@lang('models/products.fields.slug')</th>
                <th>@lang('models/products.fields.name')</th>
                <th>@lang('models/products.fields.price')</th>
                <th>@lang('models/products.fields.type')</th>
                <th>@lang('models/products.fields.width')</th>
                <th>@lang('models/products.fields.size')</th>
                <th>@lang('models/products.fields.price_el')</th>
                <th>@lang('models/products.fields.price_kedr')</th>
                <th>@lang('models/products.fields.img_1')</th>
                <th>@lang('models/products.fields.img_2')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="spacer">
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>
                    <strong>{{ $product->name }}</strong>

                    <br>
                    <a href="{!! route('products.attributes.index', [$product->id]) !!}" class='btn btn-light btn-sm mb-2'>Атрибуты</a>
                    <a href="{!! route('products.advantages.index', [$product->id]) !!}" class='btn btn-light btn-sm mb-2'>Преимущества</a>
                    <a href="{!! route('products.inners.index', [$product->id]) !!}" class='btn btn-light btn-sm mb-2'>Составляющие</a>
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->width }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->price_el }}</td>
                <td>{{ $product->price_kedr }}</td>
                <td>
                    @if ($product->img_1 != null)
                        <img src="{{ asset($product->img_1) }}" style="width: 120px;"></td>
                    @endif
                <td>
                    @if ($product->img_2 != null)
                        <img src="{{ asset($product->img_2) }}" style="width: 120px;">
                    @endif
                </td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                       {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            <tr class="spacer" style="height: 25px;"></tr>
        @endforeach
        </tbody>
    </table>
</div>
