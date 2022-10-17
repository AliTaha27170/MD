function add_to_cart(id) {
    var product_desc = document.getElementById("desc" + id).innerHTML;
    var product_image = document.getElementById("img" + id).src;
    var product_qty = document.getElementById("qty" + id).value;
    var product_code = document.getElementById("code" + id).value;

    if (checkCookie("number_now")) {
        if (checkCookie("product_number" + id))
            var number_now = parseInt(getCookie("product_number" + id));
        else {
            var number_now = parseInt(getCookie("number_now")) + 1;
            setCookie("number_now", number_now, 30);
        }

        setCookie("product_id" + number_now, id, 30);
        setCookie("product_number" + id, number_now, 30);
        setCookie("product_desc" + number_now, product_desc, 30);
        setCookie("product_image" + number_now, product_image, 30);
        setCookie("product_qty" + number_now, product_qty, 30);
        setCookie("product_code" + number_now, product_code, 30);
    } else {
        setCookie("number_now", 1, 30);
        add_to_cart(id);
    }

    call_cart();
}
    function up(id) {


      
      $(".qty"+id).val(parseInt($(".qty"+id).val())+1);

      add_to_cart(id);

    }
    function down(id) {

      if($(".qty"+id).val() ==1)
        return ;

      $(".qty"+id).val(parseInt($(".qty"+id).val())-1);

      add_to_cart(id);
      
    }
var count =0 ;

function call_cart() {

  // Delete all rows in table 
  var tb = document.getElementById('cart_table');
  while(tb.rows.length > 0) {
    tb.deleteRow(0);
  }

  var myTbody = document.querySelector("#cart_table>tbody");

  if (checkCookie("number_now")) {

    var $number_now = getCookie("number_now");
    var $empty = 1 ;
    var key =1;
     count =0 ;
     if(count == 1)
      key=0;



  for (let index = 1; index <=$number_now ; index++) {
    if(checkCookie("product_id"+index))
    {
      count = count+1;
      var $empty = 0 ;

      var $product_id     = getCookie("product_id"+index);
      var $product_desc   = getCookie("product_desc"+index);
      var $product_image  = getCookie("product_image"+index);
      var $product_qty    = getCookie("product_qty"+index);
      var $product_code   = getCookie("product_code"+index);


      if(count == 1 && key) 
      {
        $("#cart_table").find('tbody').append("<tr><th>image</th><th>code</th> <th>name</th><th>QTY</th> <th class='h'>remove</th> </tr>");
        key =0 ;

      }


      $("#cart_table").find('tbody').append('  <tr><th scope="row"><div class="d-flex align-items-center"> '  
      + ' <img src="'+$product_image+'" class="img-fluid rounded-3" style="width: 120px;" alt="Book"> '

      + ' </div>    </th>    <td>'+$product_code+'</td>     <td class="align-middle">   '

      + '  <p class="mb-0" style="font-weight: 500;">'+ $product_desc +'</p>   '

      +' </td>      <td class="align-middle">      <div class="d-flex flex-row" style="margin: 60px;"> '
      +'       <button class=" h btn btn-link px-2 cart-btn"          onclick="down('+$product_id+')">  '
      +'       <i class="fas fa-minus"></i>        </button> '
      +'       <input class="qty'+$product_id+' qty" min="0" value="' + $product_qty +'" type="number"    '  
      +'    class="form-control form-control-sm que" style="width: 50px;" /> '
      +'       <button class=" h btn btn-link px-2 cart-btn"   '
      +'     onclick="up('+$product_id+')">  '  
      +'    <i class="fas fa-plus"></i>     </button>     </div>   </td>        <td class="align-middle h">      <a style="color:red" onClick="delete_element('+index+')" href="#">remove</a>  </td> '
      +'<td class="h"><input  hidden name="product[]" value="'+$product_id+'"> '
      +' <input  class="qty'+$product_id+'" id="qty_input'+index+'"  hidden name="qty[]" value="'+$product_qty+'"> </td></tr> <style>.h{display:none;} input{pointer-events: none; }</style>');

    }
    if(count)
    {
      $('.num_backet').text(count);

    }
  else
    $('.num_backet').text('');
  }

 $('#items').text(count);
 $('#table1').val($('#table_id').html());



}
else
{
  var newRow = myTbody.insertRow();
  newRow.insertCell().append("There are no products to display !");
}

}


function delete_element (product_number ) {
  var $id =  getCookie("product_id"+product_number) ;

  document.cookie = "product_id"+product_number+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "product_number"+$id+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "product_desc"+product_number+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "product_image"+product_number+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "product_qty"+product_number+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.cookie = "product_code"+product_number+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  call_cart();
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(name) {
    let cookie = getCookie(name);
    if (cookie != "") return true;

    return false;
}

call_cart();
  if(count)
    $('.num_backet').text(count);
  else
    $('.num_backet').text('');



    function clear_cart() {

    var $number_now = getCookie("number_now");
    for (let index = 1; index <=$number_now ; index++) {
      if (checkCookie("product_id"+index))
          delete_element(index);
      call_cart();
    }

    setCookie("number_now", 1, 30);

      
  call_cart();
  }

