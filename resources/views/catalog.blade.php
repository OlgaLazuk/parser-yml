@extends('layouts.shop')
@section('content')
    <div class="container">
        <h1>Каталог товаров</h1>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div id="store" class="col-md-12">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="clearfix visible-sm visible-xs"></div>
                            <div class="col-md-4">
                                <div class="product">
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
                                        <h4 class="product-price">{{$product->price}} руб.</h4>
                                        <div class="product-rating">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="store-filter clearfix">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
