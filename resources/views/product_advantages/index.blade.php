@extends('layouts.app')
@section('title')
     @lang('models/productAdvantages.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/productAdvantages.plural') для {{ $product->name }}</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('products.advantages.create', [$product->id]) }}" class="btn btn-primary form-btn">@lang('crud.add_new')<i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('product_advantages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection



