<!-- header section starts  -->

<header class="header">

  <div class="header-1">

    <a href="/" class="logo"> <img src="{{ asset('img/logo.png')}}" alt="Logo"><span class="md">MD</span><span
        class="goods">Goods</span> </a>
    {{--
    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="bi bi-search"></label>
    </form> --}}

    <div class="icons">
      <div id="search-btn" class="bi bi-search"></div>
      <a href="{{route('favorite_list')}}" class="bi bi-heart"><span class="sp">Favorit list</span></a>
      @if (Auth::check())

      <form id="logout" action="{{route('logout')}}" method="POST">
        @csrf
        <a onclick='document.getElementById("logout").submit();' class="bi bi-door-closed"> <span
            class="sp">Logout</span> </a>

      </form>


      @else
      <a href="{{route('login')}}" class="bi bi-person"> <span class="sp">login</span> </a>

      @endif
      <div hidden id="login-btn" class="bi bi-person"> <span class="sp">login</span> </div>
    </div>

  </div>

  <div class="header-2">
    <nav class="my-navbar">
      <a href="{{route('index')}}"> Home </a>
      <a href="{{route('food',1)}}"> Food Products </a>
      {{-- <a href="/cookbooks">Cookbooks</a> --}}
      {{-- <a href="/products-listing">Products Listing</a> --}}
      <a href="#" class="bi bi-basket" id="cart"> <span class="num_backet"></span></a>

    </nav>
  </div>

</header>

<!-- header section ends -->

<!-- bottom my-navbar  -->

<nav class="bottom-my-navbar">
  <a href="{{route('index')}}" class="bi bi-house"></a>
  <a href="{{route('food',$category->id)}}" class="bi bi-box-seam"></a>
  {{-- <a href="{{route('cookbooks')}}" class="bi bi-book"></a> --}}
  {{-- <a href="/products-listing" class="bi bi-card-list"></a> --}}
  <a href="#" class="bi bi-basket" id="cart"> <span class="num_backet"></span></a>

</nav>

<!-- login form  -->

<div class="login-form-container ">

  <div id="close-login-btn" class="fas fa-times"></div>


  <form>
    <h3>Thank you for your interest in Mediterranean Goods products.
    </h3>
    <p>MDGoods.com is commited to your privacy and will not share, sell or rent your information with anybody outside
      our organization.
    </p>
    <div class="row">
      <div class="col-6">
        <span> <br> Name*</span>
        <input type="text" name="name" value="{{$_COOKIE['name'] ??  (auth()->user()->name ?? '')}}" class="box req"
          placeholder="Name*" onchange="$('#name').val($('#name_').val())" id="name_" required>

      </div>
      <div class="col-6">
        <span> <br> Company</span>

        <input type="text" name="company" value="{{$_COOKIE['company'] ??  (auth()->user()->company ?? '')}}"
          class="box" placeholder="Company" onchange="$('#company').val($('#company_').val())" id="company_">

      </div>
      <div class="col-6">
        <span> <br> Address*</span>

        <input type="text" name="address" value="{{$_COOKIE['address'] ??  (auth()->user()->address ?? '')}}"
          class="box req" placeholder="Address*" onchange="$('#address').val($('#address_').val())" id="address_"
          required>

      </div>

      <div class="col-6">
        <span> <br> City*</span>

        <input type="text" name="city" value="{{$_COOKIE['city'] ??  (auth()->user()->city ?? '')}}" class="box req"
          placeholder="City*" onchange="$('#city').val($('#city_').val())" id="city_" required>

      </div>
      <div class="col-6">
        <span> <br> State*</span>

        <input type="text" name="state" value="{{$_COOKIE['state'] ??  (auth()->user()->state ?? '')}}" class="box req"
          placeholder="State*" onchange="$('#state').val($('#state_').val())" id="state_" required>

      </div>
      <div class="col-6">
        <span> <br> Zip Code*</span>

        <input type="text" name="zip_Code" value="{{$_COOKIE['zip_Code'] ??  (auth()->user()->zip_Code ?? '')}}"
          class="box req" placeholder="Zip Code*" onchange="$('#zip_Code').val($('#zip_Code_').val())" id="zip_Code_"
          required>

      </div>
      <div class="col-6">
        <span> <br> Telephone*</span>

        <input type="number" name="telephone" value="{{$_COOKIE['telephone'] ??  (auth()->user()->telephone ?? '')}}"
          class="box req" placeholder="Telephone*" onchange="$('#telephone').val($('#telephone_').val())"
          id="telephone_" required>

      </div>
      <div class="col-6">
        <span> <br>Fax</span>

        <input type="text" name="fax" value="{{$_COOKIE['fax'] ??  (auth()->user()->fax ?? '')}}" class="box"
          placeholder="Fax" onchange="$('#fax').val($('#fax_').val())" id="fax_">

      </div>
      <div class="col-6">
        <span> <br> Email*</span>

        <input type="email" name="email" value="{{$_COOKIE['email'] ??  (auth()->user()->email ?? '')}}" class="box req"
          placeholder="Email*" onchange="$('#email').val($('#email_').val())" id="email_">

      </div>

      <div class="col-6">
        <span> <br> Secd copy to </span>

        <input type="email" name="copy" value="{{$_COOKIE['copy'] ??  ('')}}" class="box" placeholder="Secd copy to "
          onchange="$('#copy').val($('#copy_').val())" id="copy_">

      </div>

      <div class="col-12">
        <span> <br> comments</span>

        <input type="text" name="comments" value="{{$_COOKIE['comments'] ??  ('')}}" class="box" placeholder="comments"
          onchange="$('#comments').val($('#comments_').val())" id="comments_">

      </div>
    </div>
    <a type="submit" onclick="$('#f_submit').click()" class="btn">Submit order </a>
  </form>

</div>

<!-- Cart   -->
<form action="{{route('checkout')}}" method="POST">

  <div class="login-form-container cart">

    <div id="close-login-btn2" class="fas fa-times"></div>


    <section class="h-100 h-custom" style="max-height: 1000px">
      <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            @csrf
            <center>
              <h1 style="font-size: 24px !important">Order Details </h1>
              <a onClick="clear_cart()" type="button" class="btn  btn-c">
                <div class="d-flex justify-content-between">
                  <span>clear cart</span>
                </div>
              </a>

              <a onClick="checkout()" class="btn btn-c  ">
                <div class="d-flex justify-content-between">
                  <span>Check Out
                  </span>
                </div>
              </a><br><br>
            </center>
            <strong class="items_num"> <span id="items">0</span> items</strong>

            <div id="table_id" class="table-responsive scrollbar"
              style="overflow-y:scroll;height:600px;overflow-x:hidden;margin-top: 20px;">
              <table class="table" id="cart_table">

                <thead>
                </thead>
                <div class="scrollit">

                  <tbody>
                    {{-- <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center">
                          <img src="https://i.imgur.com/2DsA49b.webp" class="img-fluid rounded-3" style="width: 120px;"
                            alt="Book">

                        </div>
                      </th>
                      <td></td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Digital</p>
                      </td>
                      <td></td>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2 cart-btn"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm que" style="width: 50px;" />

                          <button class="btn btn-link px-2 cart-btn"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td></td>
                      <td class="align-middle">
                        <a href="">remove</a>

                      </td>

                    </tr> --}}

                  </tbody>
                </div>
              </table>

              <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                <div class="card-body p-4">

                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">

                      <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">

                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            {{-- <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                            Card --}}
                          </p>
                        </div>
                      </div>
                      <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">

                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            {{-- <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card --}}
                          </p>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <div class="d-flex align-items-center pe-2">

                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            {{-- <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>PayPal --}}
                          </p>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-6">
                      <div class="row">
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            {{-- <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                              placeholder="John Smith" />
                            <label class="form-label" for="typeName">Name on card</label> --}}
                          </div>

                          <div class="form-outline mb-4 mb-xl-5">
                            {{-- <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label> --}}
                          </div>
                        </div>
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            {{-- <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                              placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" /> --}}
                            {{-- <label class="form-label" for="typeText">Card Number</label> --}}
                          </div>

                          <div class="form-outline mb-4 mb-xl-5">

                            {{-- <label class="form-label" for="typeText">Cvv</label> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">



                      <hr class="my-4">




                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
    </section>
  </div>
  <div id="inputs" hidden>

    <input type="text" name="table" id="table1" hidden>
    <input type="text" name="name" class="box req" placeholder="Name*" id="name"
      value="{{$_COOKIE['name'] ??  (auth()->user()->name ?? '')}}" required>


    <div class="col-6">
      <input type="text" name="company" class="box" placeholder="Company" id="company"
        value="{{$_COOKIE['company'] ??  (auth()->user()->company ?? '')}}">

    </div>
    <div class="col-6">
      <input type="text" name="address" class="box req" placeholder="Address*" id="address" required
        value="{{$_COOKIE['address'] ??  (auth()->user()->address ?? '')}}">

    </div>

    <div class="col-6">
      <input type="text" name="city" class="box req" placeholder="City*" id="city" required
        value="{{$_COOKIE['city'] ??  (auth()->user()->city ?? '')}}">

    </div>
    <div class="col-6">
      <input type="text" name="state" class="box req" placeholder="State*" id="state" required
        value="{{$_COOKIE['state'] ??  (auth()->user()->state ?? '')}}">

    </div>
    <div class="col-6">
      <input type="text" name="zip_Code" class="box req" placeholder="Zip Code*" id="zip_Code" required
        value="{{$_COOKIE['zip_Code'] ??  (auth()->user()->zip_Code ?? '')}}">

    </div>
    <div class="col-6">
      <input type="number" name="telephone" class="box req" placeholder="Telephone*" id="telephone" required
        value="{{$_COOKIE['telephone'] ??  (auth()->user()->telephone ?? '')}}">

    </div>
    <div class="col-6">
      <input type="text" name="fax" class="box" placeholder="Fax" id="fax"
        value="{{$_COOKIE['fax'] ??  (auth()->user()->fax ?? '')}}">

    </div>
    <div class="col-6">
      <input type="email" name="email" class="box req" placeholder="Email*" id="email"
        value="{{$_COOKIE['email'] ??  (auth()->user()->email ?? '')}}">

    </div>

    <div class="col-6">
      <input type="email" name="copy" class="box" placeholder="Secd copy to " id="copy"
        value="{{$_COOKIE['copy'] ??  ( '')}}">

    </div>

    <div class="col-12">
      <input type="text" name="comments" class="box" placeholder="comments" id="comments"
        value="{{$_COOKIE['comments'] ??  ( '')}}">

    </div>
  </div>

  <input type="submit" id="f_submit" hidden>
</form>
<style>
  td {
    padding: 15px;
  }
</style>