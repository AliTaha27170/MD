@extends('app')
@section("main")

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
    <!-- Slider -->
       <!-- Slide1 -->
       <div class="swiper-slide" style="background-image: url(https://mdgoods.com/images/2.jpg)">
          <div class="slide-text">
             {{-- <h1>This is some kind of headline</h1>
             <p>Here goes a little description to fill this tiny empty space.</p>
             <button class="btn">read more</button> --}}
          </div>
       </div>
       <!-- END Slide1 -->
       <!-- Slide2 -->
       <div class="swiper-slide" style="background-image: url(https://mdgoods.com/images/6.jpg)">
          <div class="slide-text">
             {{-- <h1>Here goes a second headline</h1>
             <p>And another little description.</p> --}}

          </div>
       </div>
       <!-- END Slide2 -->
       <!-- Slide3 -->
       <div class="swiper-slide" style="background-image: url(https://mdgoods.com/images/8.jpg)"></div>
       <!-- END Slide3 -->
       <!-- Slide4 -->
       <div class="swiper-slide" style="background-image: url(https://mdgoods.com/images/4.jpg)"></div>
       <!-- END Slide4 -->

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"><span></span></div>
    <div class="swiper-button-next"><span></span></div>

 </div>
    <section class="thank-you">
        <div class="container">
            <div class="row">
                <div class="thank-you-text col-md-6 col-sm-12">
                    <h3>Thank You</h3>
                    <p>
                        Our gratitude for our continued success, which would not have been possible without our customers support, is evidenced by our readiness to show appreciation for their loyalty and in relentlessly exploring and fostering a shared purpose. What brings people together is common, shared interests, and our expression of gratitude stems from the opportunity to contribute to that shared purpose.
                        We always strive to cultivate and nurture gratitude as loyalty will naturally follow. Your feedback is so invaluable to us as we can only learn from listening.
                    </p>
                </div>
                <div class="thank-you-image col-md-6 col-sm-12">
                    <img src="{{asset('img/thankyou.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="customer-service">
        <div class="container">
            <div class="row">
                <div class="customer-service col-md-6 col-sm-12">
                    <img src="{{asset('img/customerservice.png')}}" alt="">
                </div>
                <div class="customer-service col-md-6 col-sm-12">
                    <h3>Customer Service</h3>
                    <p>
                        Our commitment to quality and service is the cornerstone of our success. No matter how great our products are or how talented our staff is, one of the things that our customers are most likely to remember is the direct, friendly interaction they have with our company.<br>
                        Our customer service team is the face of Mediterranean Goods, and our customers’ experiences are defined by the skills and quality of the support they receive. We are constantly on the lookout for opportunities to improve our customer service by increasing our knowledge of our products through clear communication conducted in the highest professional work ethic principles.
                    </p>
                </div>
            </div>
        </div>
    </section>

 {{-- <section class="customer-service">
    <div class="customer-service-image">
        <img src="{{asset('img/customerservice.png')}}" alt="">
    </div>

    <div class="customer-service-text">
    <h3>Customer Service</h3>
    <p>
        Our commitment to quality and service is the cornerstone of our success. No matter how great our products are or how talented our staff is, one of the things that our customers are most likely to remember is the direct, friendly interaction they have with our company.<br>
        Our customer service team is the face of Mediterranean Goods, and our customers’ experiences are defined by the skills and quality of the support they receive. We are constantly on the lookout for opportunities to improve our customer service by increasing our knowledge of our products through clear communication conducted in the highest professional work ethic principles.    </p>
   </div>
</section> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>
@stop
