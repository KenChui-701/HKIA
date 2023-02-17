<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coinjection</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/course.css" rel="stylesheet">


    <link rel="icon" type="image/webp" href="img/coin.webp" />

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom " id="navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Coinjection</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Course</a>
                </li>
                
                <li class="nav-item">
        <a class="nav-link" href="level.php">Level</a>
      </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php session_start();

                if(isset($_SESSION['username'])) { 
                
                
                    $username1 = $_SESSION['username'];
                

                    include ("conn/connection.php");
                    $sql = "SELECT * FROM attack WHERE username='$username1' ";
                    $rs = mysqli_query($conn, $sql);
                    $rc = mysqli_fetch_assoc($rs);

                    $attackmarks=0;

                    for($x = 1; $x <= 10; $x++){
                        $attackmarks+=$rc['Lesson'.$x.'_mark'];

                    }
                    
                    $sql = "SELECT * FROM defense WHERE username='$username1' ";
                    $rs = mysqli_query($conn, $sql);
                    $rc = mysqli_fetch_assoc($rs);

                    $defensemarks=0;

                    for($x = 1; $x <= 4; $x++){
                        $defensemarks+=$rc['Lesson'.$x.'_mark'];

                    }
                    
                    $totalmarks= $attackmarks+$defensemarks;
                    
                    $level=0;
                    
                    
                    if($totalmarks==57)
                    $level=6;
                    if($totalmarks<57)
                    $level=5;
                    if($totalmarks<50)
                    $level=4;
                    if($totalmarks<40)
                    $level=3;
                    if($totalmarks<30)
                    $level=2;
                    if($totalmarks<20)
                    $level=1;
                    if($totalmarks<10)
                    $level=0;
                
                
                
                ?>



                    <li class="nav-item">
                        <a class="nav-link" href="level.php">Hello, <?php  echo '[Level'.$level.'] '; echo $_SESSION['username']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>


                    <?php
                }else{ ?>


                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li>
                    <?php
                }
                ?>
            </ul>




        </div>
    </div>
</nav>

<header class="masthead masthead-page mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 py-5">
                <h1 class="masthead-heading mb-2">Course</h1>
                <h4 class="masthead-subheading m-0">You can learn how to use SQL injection attack and defense SQL injection attack </h4>
            </div>


        </div>
    </div>
    <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
                .a {
                    fill: none;
                }

                .b {
                    clip-path: url(#a);
                }

                .c,
                .d {
                    fill: #f9f9fc;
                }

                .d {
                    opacity: 0.5;
                    isolation: isolate;
                }
            </style>
            <clipPath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
    </svg>


</header>




<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 p-3" id="attack">
                <h1>&nbsp &nbsp Attack Lesson</h1>

            </div>
        </div>
    </div>
</section>



<?php
include("conn/connection.php");
$attack = array("attack", "Login Verification", "The location of the Database files", "The version of the database", "The hostname", "Get table schemas", "Get table names"
, "Get column of the database", "Get user passwords", "Drop table", "Build an admin");
if(isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM attack WHERE username='$username'";
    $rs = mysqli_query($conn, $sql);
    $rc = mysqli_fetch_assoc($rs);
}else{
    $rc=array
    ("username" => "guest",
    "Lesson1" => "0",
    "Lesson1_mark" => "0",
    "Lesson2" => "0",
    "Lesson2_mark" => "0",
    "Lesson3" => "0",
    "Lesson3_mark" => "0",
    "Lesson4" => "0",
    "Lesson4_mark" => "0",
    "Lesson5" => "0",
    "Lesson5_mark" => "0",
    "Lesson6" => "0",
    "Lesson6_mark" => "0",
    "Lesson7" => "0",
    "Lesson7_mark" => "0",
    "Lesson8" => "0",
    "Lesson8_mark" => "0",
    "Lesson9" => "0",
    "Lesson9_mark" => "0",
    "Lesson10" => "0",
    "Lesson10_mark" => "0"
);

}

for ($x = 1; $x <= 10; $x++) { ?>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 p-3">
                <div class="card bg-light lift custom-card" >
                    <div class="card-header lesson ">Lesson <?php echo $x ?></div>
                    <div class="card-body">

                        <div class="d-flex">
                            <div class="lessontitle">&nbsp &nbsp <?php echo $attack[$x] ?> &nbsp</div>

                            <?php if($rc['Lesson'.$x]==1){ ?>
                            <span class="badge badge-success align-self-center">Completed</span>
                            <?php }else{ ?>
                            <span class="badge badge-danger align-self-center">Incomplete</span>
                            <?php } ?>

                            <div class="marks ml-auto align-self-center "><?php echo $rc['Lesson'.$x.'_mark'] ?>/3 marks</div>
                        </div>
                    </div>
                    <a href="/lesson/attack/attacklesson<?php echo $x ?>.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
}
?>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 p-3" style="color:#4285F4;">
                <h1>&nbsp &nbsp Defense Lesson</h1>

            </div>
        </div>
    </div>
</section>






<?php
include("conn/connection.php");
$defense = array("defense", "Regular Expression (regexp)", "Prepared Statement I", "Prepared Statements II", "Escapes Special Characters");
$defensemarks = array("defensemarks", 4, 4, 10, 9);
if(isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM defense WHERE username='$username'";
    $rs = mysqli_query($conn, $sql);
    $rc = mysqli_fetch_assoc($rs);
}else{
    $rc=array
    ("username" => "guest",
        "Lesson1" => "0",
        "Lesson1_mark" => "0",
        "Lesson2" => "0",
        "Lesson2_mark" => "0",
        "Lesson3" => "0",
        "Lesson3_mark" => "0",
        "Lesson4" => "0",
        "Lesson4_mark" => "0"

    );

}

for ($x = 1; $x <= 4; $x++) { ?>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 p-3">
                    <div class="card bg-light lift custom-card" >
                        <div class="card-header lesson ">Lesson <?php echo $x ?></div>
                        <div class="card-body">

                            <div class="d-flex">
                                <div class="lessontitle">&nbsp &nbsp <?php echo $defense[$x] ?> &nbsp</div>

                                <?php if($rc['Lesson'.$x]==1){ ?>
                                    <span class="badge badge-success align-self-center">Completed</span>
                                <?php }else{ ?>
                                    <span class="badge badge-danger align-self-center">Incomplete</span>
                                <?php } ?>

                                <div class="marks ml-auto align-self-center "><?php echo $rc['Lesson'.$x.'_mark'] ?>/<?php echo $defensemarks[$x] ?> marks</div>
                            </div>
                        </div>
                        <a href="/lesson/defense/defenselesson<?php echo $x ?>.php" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
}
?>










<div class="py-5"">

</div>


<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Coinjection 2020</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        var clientHeight = document.getElementById('navbar').clientHeight;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0px";
        } else {
            document.getElementById("navbar").style.top = "-"+clientHeight+"px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

</body>

</html>
