<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="menu.css">

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
              <a class="nav-link" href="contact.php">Contact</a>
              
              <div class="dropdown">
                <a class="btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  account
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Register</a></li>
                  <li><a class="dropdown-item" href="#">Login</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>


        
            </div>
          </div>
        </div>
      </nav>


      <div class="container mt-4">
<h3>Contact us</h3>
<hr>

<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your username">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Email Address</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email address">
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="tel" name="phonenumber" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>

  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Enter your message here</label>
    <input type="text" name="message" class="form-control" id="exampleInputPassword1">
  </div>
  <br>

  <button type="submit" name="submit" class="btn btn-warning">Submit</button>
</form>
<br>



</div>


<div class="copyright-box">
  <p>Copyright © 2021 ShopEase.pk. All rights reserved.</p>
</div>
</body>
</html>
<?php
include("config.php");

if(isset($_POST["submit"])){
$username= $_POST["username"];
$email= $_POST["email"];
$phone=$_POST["phonenumber"];
$message=$_POST["message"];

$sql = "INSERT INTO contact(username, email, phone, message) 
VALUES ('".$username."', '".$email."', '".$phone."','".$message."')";
$executequery = mysqli_query($conn, $sql);
if($executequery)
{
  ?>
  <script>
    alert("data inserted");
    </script>

    <?php
}

}

?>

