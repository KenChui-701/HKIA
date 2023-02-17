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
                    <a class="nav-link" href="course.php">Course</a>
                </li>
                
                <li class="nav-item">
        <a class="nav-link" href="level.php">Level</a>
      </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php session_start();

                if(isset($_SESSION['username'])) { 
                
                include("getlevel.php");
                
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
                <h1 class="masthead-heading mb-2">About us</h1>
                <h4 class="masthead-subheading m-0">You can know more about us and our website here </h4>
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
            <div style= "font-size : 18px" class="col-lg-6 p-3"  >
                As IVE students, our learning programs stay on the pulse with industry trends and developments. Not only that, we are a team of young visionaries passionate on fostering Hong Kong’s FinTech talents. Studying a variety of tech companies made us aware of the limitless application of FinTech, but also a need for better security standards. Most higher education skim over security and staffs are unaware of attackers. So, we created the Coinjection project to make our city more secured. Our step-by-step tutorial paired with realistic dummy websites makes InfoSec easy and fun for everyone, from web developers to top managers.

            </div>
            <div class="col-lg-6 p-3"  >

                <img style= "width: 100%;"  src="img/ive.svg" >
            </div>

        </div>




    </div>
</section>














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
