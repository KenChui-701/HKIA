



<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/maymay.css">
  <meta charset="utf-8">
  <title>Untitled Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <style>


</style>


</head>
<body>

<?php 
$conn = mysqli_connect("database4test.superailgun.com",
    "root", "HEI5QWLZpldF", "test");
$sql4 = "SELECT price FROM stock WHERE stockid = 1";
include 'gg.php';
?>
</body>
</html>