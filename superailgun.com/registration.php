<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/registration.css" rel="stylesheet">
  <link rel="icon" type="image/webp" href="img/coin.webp" />

</head>

<body>

<?php
if(isset($_GET['fail'])) {
    ?>
    <script>
        function myFunction() {
            alert("Username already exists , Please try another username");
        }
        myFunction()
    </script>


<?php

}
session_start();


if(isset($_POST['username'])){
    include ("conn/connection.php");

    extract($_POST);
    
    $sql = "SELECT * FROM user WHERE username='$username'";
    $rs = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($rs);
    if ($num == 1) {
    	
    	header("Location:registration.php?fail=1");
        

    } else {
       
    
    
    
    $password = password_hash($password, PASSWORD_ARGON2I);


    $sql = "INSERT INTO user( username,password) VALUES ('$username','$password')";
    $rs_insert = mysqli_query($conn, $sql);
    $sql = "INSERT INTO attack(username) VALUES ('$username')";
    $rs_insert = mysqli_query($conn, $sql);
    $sql = "INSERT INTO defense(username) VALUES ('$username')";
    $rs_insert = mysqli_query($conn, $sql);

    $_SESSION['username'] = $username;

    header("Location:index.php");


}

}
?>




  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Coinjection</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
		
		<ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="course.php">Course</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="level.php">Level</a>
      </li>
      
	        <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
    </ul>
	  
	  	  
	  
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Register</h3>
              <form action="registration.php" method="post">
                <div class="form-label-group">
                  <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
                  <label for="inputUsername">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                  <label for="inputPassword">Password</label>
                </div>
				  
				  <div class="form-label-group">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm password" name="confirmpassword" required>
                  <label for="inputConfirmPassword">Confirm password</label>
                </div>


                <button id="btnSubmit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
  <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#inputPassword").val();
            var confirmPassword = $("#inputConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>

</body>

</html>
