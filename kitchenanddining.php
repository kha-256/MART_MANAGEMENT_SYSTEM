<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

    <link rel="stylesheet" href="fruits.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ShopEase.pk</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="#">Contact</a>
              
              <div class="dropdown">
                <a class="btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  account
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="register.php">Register</a></li>
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>

    
        
            </div>
          </div>
        </div>
      </nav>

  
    


      <div class="row">
  
      
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="card">
  <img src="homeandlifestyle/kitchen and dining/cup and soccer set.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">cup and soccer set</h1>
    <ul class="pagination">
        <li class="page-item">
        <button class="page-link " onclick="decreaseNumber('textbox','itemval')">
        <i class="fas fa-minus"></i> </button>
        </li>
        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox" >
        </li>
        <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox','itemval')"> 
        <i class="fas fa-plus"></i></button>
        </li>
        </ul>

    <p class="card-text" >
    <h3 style="overflow-y: hidden;">Rs.<span  id="itemval">0.00 </span></h3>
    </p>
  </div>
</div>
</div>


<div class="col-sm-12 col-md-6 col-lg-4">
<div class="card">
  <img src="homeandlifestyle/kitchen and dining/cutlery set.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">cutlery set</h1>
    <ul class="pagination">
        <li class="page-item">
        <button class="page-link " onclick="decreaseNumber('textbox1','itemval1')">
        <i class="fas fa-minus"></i> </button>
        </li>
        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox1" >
        </li>
        <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox1','itemval1')"> 
        <i class="fas fa-plus"></i></button>
        </li>
        </ul>

    <p class="card-text" >
    <h3 style="overflow-y: hidden;">Rs.<span  id="itemval1">0.00 </span></h3>
    </p>
  </div>
</div>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
<div class="card">
  <img src="homeandlifestyle/kitchen and dining/dining table mat.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">dining table mat</h1>
    <ul class="pagination">
        <li class="page-item">
        <button class="page-link " onclick="decreaseNumber('textbox2','itemval2')">
        <i class="fas fa-minus"></i> </button>
        </li>
        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox2" >
        </li>
        <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox2','itemval2')"> 
        <i class="fas fa-plus"></i></button>
        </li>
        </ul>

    <p class="card-text" >
    <h3 style="overflow-y: hidden;">Rs.<span  id="itemval2">0.00 </span></h3>
    </p>
  </div>
</div>
</div>


<div class="col-sm-12 col-md-6 col-lg-4">
<div class="card">
  <img src="homeandlifestyle/kitchen and dining/non stick pan.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">non stick pan</h1>
    <ul class="pagination">
        <li class="page-item">
        <button class="page-link " onclick="decreaseNumber('textbox3','itemval3')">
        <i class="fas fa-minus"></i> </button>
        </li>
        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox3" >
        </li>
        <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox3','itemval3')"> 
        <i class="fas fa-plus"></i></button>
        </li>
        </ul>

    <p class="card-text" >
    <h3 style="overflow-y: hidden; ">Rs.<span  id="itemval3">0.00 </span></h3>
    </p>
  </div>
</div>
</div>


</div>


     
<hr>

<div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
<div class="right_side p-3">
<h2 class="product_name mb-5">The Total Amount Of</h2>
<div class="price_indiv d-flex justify-content-between">
<p>Product amount</p>
<p>Rs.<span id="product_total_amt">0.00</span></p>
</div>
<div class="price_indiv d-flex justify-content-between">
<p>Shipping Charge</p>
<p>Rs.<span id="shipping_charge">50.0</span></p>
</div>
<hr />
<div class="total-amt d-flex justify-content-between font-weight-bold">
<p>The total amount of (including VAT)</p>
<p>Rs.<span id="total_cart_amt">0.00</span></p>
</div>



<a href="success.php"><button class="btn btn-warning">Checkout</button></a>
</div>
</div>

<hr>
<br><br>

<div class="copyright-box">
  <p>Copyright © 2021 ShopEase.pk. All rights reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script type="text/javascript">

    var product_total_amt = document.getElementById('product_total_amt');
    var shipping_charge = document.getElementById('shipping_charge');
    var total_cart_amt = document.getElementById('total_cart_amt');
    var discountCode = document.getElementById('discount_code1');
    const decreaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
   
    if(itemval.value <= 0){
    itemval.value = 0;
    alert('Negative quantity not allowed');
    }else{
    itemval.value = parseInt(itemval.value) - 1;
    itemval.style.background = '#fff';
    itemval.style.color = '#000';
    itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 700;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 700;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    const increaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    // console.log(itemval.value);
    if(itemval.value >= 5){
    itemval.value = 5;
    alert('max 5 allowed');
    itemval.style.background = 'red';
    itemval.style.color = '#fff';
    }else{
    itemval.value = parseInt(itemval.value) + 1;
    itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 700;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 700;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    
    
    </script>


</body>
</html>