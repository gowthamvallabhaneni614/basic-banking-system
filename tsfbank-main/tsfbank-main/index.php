<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 
  

<style>
      *
      {
        margin:0;
        padding:0;
      }
      .responsive {
  width: 100%;
  max-width: 100%;
  height: auto;
}

 </style>      
  
  <?php 
  if(isset($_REQUEST['sub']))
  {
    $s=$_GET['sub'];
    if($s=="USER'S DETAILS")
    {
    header("location:user.php");
    }
    elseif ($s=="MONEY TRANSFER") 
    {
     header("location:sender.php");
    }
  }
  ?>
</head>
<body style="background-color:#FFC0CB">
<nav class="navbar navbar-expand-lg py-1 navbar-dark bg-dark shadow-lg mb-3">

  
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="https://img.favpng.com/19/25/12/bank-icon-icons-money-icon-png-favpng-nYWavaFxxLEHGbhfa2sktj7y7.jpg" width="80" alt="" class="d-inline-block align-left mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">THE GOWTHAM BANK</span>
    </a>
    
</nav>

<div class="container text-center">
<form name="f1">  
<div class="row">  
    <img src="https://i.pinimg.com/originals/08/45/15/084515f32c3dcdf08032434c741c3c87.jpg" width="700px" height="300px" class="responsive mb-2">
  
  </div>
  <div class="row align-items-center justify-content-center mb-2">
    <h1 style="font:Arial;color: midnightblue;text-align:center"><b>SELECT YOUR CHOICE</b></h1>

  </div>

<div class="row align-items-center justify-content-center mb-5">
  <div class="col-md-6">
    <div class="card"style="width: 13rem ;background-color:#87CEFA">
    <img src="https://image.freepik.com/free-icon/user-male-shape-in-a-circle--ios-7-interface-symbol_318-35357.png" class="d-md-block" height="150px" weight="150px" />
        <div class="card-body">
      <input type="submit" name="sub" class="btn btn-warning" value="USER'S DETAILS">
        </div>
    </div>
  </div>  
  <div class="col-md-3">
    <div class="card" style="width: 13rem ;background-color:#87CEFA">
    <img src="https://www.publicdomainpictures.net/pictures/270000/velka/money-transfer-banking-icon-bu.jpg" class="d-md-block" height="150px" weight="150px" />
        <div class="card-body">
      <input type="submit" name="sub" class="btn btn-warning" value="MONEY TRANSFER">
        </div>
    </div>
  </div>  

</div>
  </form>
</div>
<div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </div>    
<?php
include 'footer.php';
?>

  
</body>
</html>