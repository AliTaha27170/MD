@extends('app')
@section('main')

<section class="books">
    <div class="container-fluid">
        <div class="row">
            <div class="books-area col-md-12 col-sm-12">

                {{-- books_count --}}
                <div class="total-books">
                    <span id="books_count" ></span>
                </div>
                {{-- books_count --}}

                {{-- book Card --}}
                <div class="book-card">
                    <div class="image-section">
                        <img src="{{asset('img/BKS001-L.jpg')}}" alt="">
                    </div>
                    <div class="info-section">
                        <h3 class="book-title">THE COMPLETE MIDDLE EAST COOKBOOK.</h3>
                        <div class="author">
                            <span class="author-name">Tess Mallos</span>
                        </div>
                        <div class="card-footer">
                            <div class="book-language"><span>book language : <span class="language">English</span></span></div>
                            <div class="book-item">#BKS001</div>
                        </div>
                        <div class="description">
                            <p>With recipes from Greece, Turkey, Lebanon, Egypt, Syria, and even lesser known cuisines from Afghanistan, Armenia, Cyprus, Iran, Jordan, Saudi Arabia, Bahrain, Kuwait, Oman, Qatar, the United Arab Emirates, and Yemen, this book is truly a wonderful compilation of some of the most delicious Middle Eastern foods. Each chapter in this book examines the customs and cooking methods of each country illustrated by full-page color photos. The book also includes a glossary of regional names and descriptions of foods and ingredients.</p>
                        </div>
                        <div class="add-to-cart">
                            <button class=btn>Add to cart</button>
                            <div class="quantity">
                                <span>QTY:</span>
                                <input type="number">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- book Card --}}
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/cook-books.js')}}"></script>

@stop
