let productsCount = document.querySelectorAll(".product").length;
let productsCountSpan = document.getElementById('products_count');
if(productsCount == 0){
    productsCountSpan.innerText = "No Products";
    document.querySelector('.total-products').style = "justify-content: center;";
}
else if(productsCount == 1){
    productsCountSpan.innerText = productsCount + ' ' + 'product';
}
else{
    productsCountSpan.innerText = productsCount + ' ' +'products';
}
