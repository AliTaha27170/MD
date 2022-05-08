@extends('app')
@section("main")
<section class="products">
    <div class="container-fluid">
        <div class="row">
            <div class="categories col-md-3 col-sm-12">
                <div class="categories-title"><h2>Categories</h2><i class="bi bi-chevron-down"></i></div>
                <ul>
                    <a href="#"><li>Beans and Peas</li></a>
                </ul>
            </div>
            <div class="products-area col-md-9 col-sm-12">

                {{-- products_count --}}
                <div class="total-products">
                    <span id="products_count" ></span>
                </div>
                {{-- products_count --}}

                {{-- Product Card --}}
                <div class="product">
                    <img src="https://mdgoods.com/images/fooditems/GRFY001-L.jpg" alt="">
                    <div class="info">
                        <span class="brand">YARA</span>
                        <span class=item>#GRLY001</span>
                    </div>
                    <div class="description">
                        <p>Windex Original Glass Cleaner, 32 Fl Oz & 176 Fl Oz</p>
                    </div>
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


            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/food-products.js')}}"></script>
@stop
