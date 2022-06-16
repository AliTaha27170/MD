@extends('app')
@section('main')

    <section class="products">
        <div class="container-fluid">
            <div class="row">
                <div class="categories col-md-3 col-sm-12">
                    <div class="categories-title">
                        <h2>Categories</h2><i class="bi bi-chevron-down"></i>
                    </div>
                    <ul>
                        @foreach ($categories as $category)
                            <a href="{{ route('food', $category->id) }}">
                                <li class="{{ $category->id == $ItemCategoryName ? 'active' : '' }}">{{ $category->name }}
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="products-area col-md-9 col-sm-12">

                    {{-- products_count --}}
                    <div class="total-products">
                        <span id="products_count"></span>
                    </div>
                    {{-- products_count --}}

                    @foreach ($products as $product)
                        {{-- Product Card --}}
                        <div class="product">
                            <img src="{{ Voyager::image($product->ItemImage) }}" alt="">
                            <div class="info">
                                <span class="brand">{{ $product->brand->name ?? '' }}</span>
                                <span class=item>{{ $product->ItemID }}</span>
                            </div>
                            <div class="description">
                                <p>{{ $product->ItemName }}</p>
                            </div>
                            {{-- <div class="description">
                                <p>{{ $product->ItemLongDescription }}</p>
                            </div> --}}
                            <div class="packing">
                                <span>packing:</span>
                                <span>12- 28 oz. (794g)</span>
                            </div>
                            <div class="add-to-cart">
                                <button class=btn>Add to cart</button>
                                <div class="quantity">
                                    <span>QTY:</span>
                                    <input type="number">
                                </div>
                            </div>
                        </div>
                        {{-- Product Card --}}
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/food-products.js') }}"></script>
@stop
