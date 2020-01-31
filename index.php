<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="name">
  <img src="8.jpg" style="width:270px;height=200px;" align="left">
</div>

<div class="content" align="right">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->

    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p > <a href="health.html" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<br>


<br>


<br>


<br>



<br>

<br>


<br>
<div class="a" style="max-width:300px">
  <img class="mySlides" src="2.jpg" style="width:1350px;height=500px;">
  <img class="mySlides" src="2.jpg" style="width:1350px;height=500px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>
<br>
<div onclick="window.open('search.html','mywindow');" style="cursor: pointer;">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="aa.jpg" alt="Avatar" style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>BLOOD</h1>
      <p>MANAGEMENT</p>
      <p>CORNER</p>
    </div>
  </div>
</div>
</div>
<div onclick="window.open('medicine.html','mywindow');" style="cursor: pointer;">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="ab.jpg" alt="Avatar" style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>MEDICINE</h1>
      <p>MANAGEMENT</p>
      <p>CORNER</p>
    </div>
  </div>
</div>
</div>
<div onclick="window.open('search1.html','mywindow');" style="cursor: pointer;">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="ac.jpg" alt="Avatar" style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>BLOOD</h1>
      <p>DONATION</p>
      <p>CORNER</p>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
</body>
</html>