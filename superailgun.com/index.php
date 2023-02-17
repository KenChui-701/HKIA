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

  <!-- Custom styles for this template -->
  <link href="css/index.css" rel="stylesheet">
    <link rel="icon" type="image/webp" href="img/coin.webp" />

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom"  id="navbar">
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
            <?php session_start();

            if(isset($_SESSION['username'])) {
            include("getlevel.php");
            ?>



                <li class="nav-item">
                    <a class="nav-link" href="level.php">Hello, <?php echo '[Level'.$level.'] '; echo $_SESSION['username']; ?></a>
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

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Know Your Enemy</h1>
        <h2 class="masthead-subheading mb-0">SQL Injection</h2>
        <a href="#sql" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section id="sql">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.webp" alt="" >
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">For your financial business...</h2>
            <p>Scaling a FinTech company means more opportunities, but also more threats. Most cybersecurity services neglect the glaringly obvious vulnerability—lack of awareness. Even online academies that promotes InfoSec do not tackle financial websites specifically. Coinjection is created by experts in Fintech, for people of FinTech. And, it is 100% Free.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/02.webp" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Hacker is watching you!</h2>
            <p>The simplest attack is often the most overlooked. SQL injection began appearing in 1998, yet it represents about two-thirds of web application attacks, costing companies millions of dollars. SQL breaches costed Yahoo!’s sales price to drop by an estimated $350 million USD in 2016. It costed Heartland Payment Systems $150 Million as a compensation. It compromised personal details of 156thousand customers of British telecommunications company TalkTalk. Hackers spot loopholes like sharks smell blood, and when they do, it can cost everything.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.webp" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Lets defend!</h2>
            <p>Coinjection’s online practices are tailored towards financial businesses. Suited for everyone from managers to web developers, our service improves your security from the inside. Learn how to safeguard database instantly through like-real practice websites and step-by-step guide. Know common vulnerable points of financial websites. Raise staff member’s safety awareness.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



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
