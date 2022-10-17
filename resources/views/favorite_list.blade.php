@php
use App\Models\Favorite;

function is_fav($id)
{
$fav=Favorite::where("user_id",auth()->user()->id)->where("product_id",$id)->get();
if(count($fav)){

return true;

}
return false;
}
@endphp

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

                @foreach (auth()->user()->favorite_products as $fav)
                {{-- Product Card --}}
                @php
                    $product = $fav->product;
                @endphp
                <div class="product">
                    <a @if (isset(auth()->user()->id) and is_fav($product->id))
                        style="display:block"
                        @endif
                        
                        id="unlike{{$product->id}}" onClick="like({{$product->id}},1)" class="bi
                        heart bi-heart-fill "></a>

                    <a @if (isset(auth()->user()->id) and is_fav($product->id))
                        style="display:none"
                        @endif
                        id="like{{$product->id}}" onClick="like({{$product->id}},0)" class="bi heart bi-heart "></a>

                    <img id="img{{$product->id}}" src="{{ Voyager::image($product->ItemImage) }}" alt="">
                    <div class="info">
                        <span class="brand">{{ $product->ItemBrand ?? '' }}</span>
                        <span class=item>{{ $product->ItemID }}</span> <input type="text" hidden
                            id="code{{$product->id}}" value="{{ $product->ItemID }}">
                    </div>
                    <div class="description">
                        <p id="desc{{$product->id}}">{{ $product->ItemName }}</p>
                    </div>
                    {{-- <div class="description">
                        <p>{{ $product->ItemLongDescription }}</p>
                    </div> --}}
                    <div class="packing">
                        <span>packing:</span>
                        <span>12- 28 oz. (794g)</span>
                    </div>
                    <div class="add-to-cart">
                        <button onclick="add_to_cart({{$product->id}})" class=btn>Add to cart</button>
                        <div class="quantity">
                            <span>QTY:</span>
                            <input class="qty{{$product->id}}" type="number" value="1" id="qty{{$product->id}}">
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

<script>
function like(id , like) {
    var $auth = false;
    @if (isset(auth()->user()->id))
    $auth = true;
    @endif
    if($auth)
    {
        // $.get("/favorite/"+id);
        $.get("http://gator3047.temp.domains/~shamraadmin/mdgoods/favorite/"+id);

        if(!like)
        {
            $("#like"+id).css("display","none");
            $("#unlike"+id).css("display","block");
        }
        else{
            $("#like"+id).css("display","block");
            $("#unlike"+id).css("display","none");
        }


    }
    else{
        Swal.fire(
            "Alert" ,
            "you must login first !",
            "error"
        )
    }
}
</script>
@stop