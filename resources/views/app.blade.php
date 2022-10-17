<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MD Goods</title>
    <link href="{{asset('img/logo.png')}}" rel="icon">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('css/shop.css')}}">
    <link rel="stylesheet" href="{{ asset('css/books.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
    <link rel="stylesheet" href="{{ asset('css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/loader.css')}}">
</head>
<body>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <button id="scroll_top"><i class="bi bi-chevron-up"></i></button>
    @include('layouts.header')

    @yield('main')

    @include('layouts.footer')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

<script src="{{asset('js/cart.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>

{{-- <script>
   @if (Session()::has("error")) 
        swal.fire(
            
            "ُError" ,
            "{{session('error')}}" ,
            "error"
            );
        
    @elseif( Session()::has('msg'))
       
        alert("success");
    @endif
    alert("success");

</script> --}}
@if(Session::has('msg'))
   
<script>
swal.fire(
    "Success" ,
    "Your order has been submitted. We will contact you if we need anything else." ,
    "success" ,
);
</script>

@endif
<script>
      function checkout() {

if(count) {

    var auth = false;
    @if(Auth::check())
    // auth = true;
    @endif


    if(auth){

        $('#close-login-btn2').click();
        $('.req').prop('required',false);
        $('#f_submit').click()
    }
    else
    {
        $('#close-login-btn2').click();
        $('#login-btn').click();
    }

}
else
{
  
swal.fire(
        
  "ُError" ,
  "Please add some products first" ,
  "error"
  );

}



}
</script>
</body>
</html>

