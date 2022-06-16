<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="/" class="logo"> <img src="{{ asset('img/logo.png')}}" alt="Logo"><span class="md">MD</span><span class="goods">Goods</span>  </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="bi bi-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="bi bi-search"></div>
            <a href="#" class="bi bi-heart"></a>
            <a href="#" class="bi bi-basket"></a>
            <div id="login-btn" class="bi bi-person"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="my-navbar">
            <a href="../../../../">Home</a>
            <a href="{{route('food',$category->id)}}">Food Products</a>
            <a href="/cookbooks">Cookbooks</a>
            <a href="/products-listing">Products Listing</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom my-navbar  -->

<nav class="bottom-my-navbar">
    <a href="/" class="bi bi-house"></a>
    <a href="/food-products" class="bi bi-box-seam"></a>
    <a href="/cookbooks" class="bi bi-book"></a>
    <a href="/products-listing" class="bi bi-card-list"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <input type="password" name="" class="box" placeholder="Password" id="">
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>
