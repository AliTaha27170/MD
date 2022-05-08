let scrollTopButton = document.getElementById("scroll_top")
searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}

window.onscroll = () =>{

  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }
  if (scrollY >= 430)
  {
    scrollTopButton.style="right: 10px;transform: rotate(0deg);"
  }
  else
  {
    scrollTopButton.style="right: -60px;"
  }

}

window.onload = () =>{

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();

}
window.onload = () =>{
    setTimeout(function() {
        var loader = document.querySelector(".loader-wrapper");
        loader.style.transition = '1s';
        loader.style.opacity = '0';
        loader.style.visibility = 'hidden';
      }, 500);
}
scrollTopButton.onclick = function()
{
    window.scrollTo({
        top : 0 ,
        behavior : "smooth"

    })}


