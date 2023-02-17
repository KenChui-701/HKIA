
<html lang="en" data-kantu="1" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesson 4</title>
    <link href="/css/lesson.css" rel="stylesheet">
    <link rel="icon" type="/image/webp" href="/img/coin.webp" />

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer=""></script>
    <link href="/css/prism.css" rel="stylesheet" />
    <script src="/css/prism.js"></script>



    <style>
    .bg-gradient-primary-to-secondary {
    background-color: #0061f2;
    background-image: linear-gradient(135deg, #0061f2 0%, rgba(105, 0, 199, 0.8) 100%);
    }

    a:hover {
        color: #0042a6;
        text-decoration: underline;
    }

    a {
        color: #0061f2;
        text-decoration: none;
        background-color: transparent;
    }

    .card:not([class*=bg-]) .card-header {
        color: #0061f2;
    }
    </style>
    
    <script type="text/javascript">
function load()
{
	

if(location.search=="?q=phpediter"){
	window.location.href = "#phpediter";
}

}
</script>


<body class="nav-fixed" onload="load()">


<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/index.php">Coinjection</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/course.php">Course</a>
                </li>
                
                <li class="nav-item">
        <a class="nav-link" href="/level.php">Level</a>
      </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus.php">About us</a>
                </li>
            </ul>



            <ul class="navbar-nav ml-auto">
                <?php session_start();

                if(isset($_SESSION['username'])) { 
                include("../../getlevel.php");?>



                    <li class="nav-item">
                        <a class="nav-link" href="/level.php">Hello, <?php echo '[Level'.$level.'] '; echo $_SESSION['username'];
                        
                        ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout.php">logout</a>
                    </li>


                    <?php
                }else{ ?>


                    <li class="nav-item">
                        <a class="nav-link" href="/login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registration.php">Register</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>






<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">



                                        <div class="sidenav-menu-heading">attack lesson</div>
                    <a class="nav-link" href="/lesson/attack/attacklesson1.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 1 </b>：Login Bypass</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson2.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 2 </b>：Database Location</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson3.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 3 </b>：Database Version</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson4.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 4 </b>：Database Hostname</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson5.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 5 </b>：Database Schemas</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson6.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 6 </b>：Table Names</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson7.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 7 </b>：Table Columns</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson8.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 8 </b>：Users Password</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson9.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 9 </b>：Drop Table</a>

                    <a class="nav-link" href="/lesson/attack/attacklesson10.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 10 </b>：Create Admin</a>







                    <div class="sidenav-menu-heading">Defense lesson</div>
                    <a class="nav-link" href="/lesson/defense/defenselesson1.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 1 </b>：Regular Expression</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson2.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 2 </b>：Prepared Statement I</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson3.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 3 </b>：Prepared Statement II</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson4.php" style="color:#0061f2;">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 4 </b>：Special Characters</a>
                </div>
            </div>

        </nav>
    </div>



    <div id="layoutSidenav_content">
        <main>
            <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                <div class="container-fluid">
                    <div class="page-header-content">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></div>
                            <span> &nbsp; Defense Lesson 4</span>
                        </h1>
                        <div class="page-header-subtitle">In this lesson, we will teach you Escapes Special Characters</div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-n10">
                <div class="row">
                    <div class="col-lg-9">





                        <div id="knowledge">
                            <div class="card mb-4">
                                <div class="card-header">Knowledge</div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">


                                                <h2>mysql_real_escape_string</h2><Br><h5>mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement</h5>If you’re using an older PHP version (5.5 or lower, and this happens a lot on shared hosting), it’s wise to run all your user input through a function called mysql_real_escape_string(). Basically, what it does it remove all special characters in a string so that they lose their meaning when used by the database.<br><br>This honest function belongs not to security but to mere SQL formatting. Moreover - SQL strings formatting only. And it is useless for any other literal - be it number, identifier or a keyword.
<br><br>


                                                
												<h3>Description </h3>
												Escapes special characters in the unescaped_string, taking into account the current character set of the connection so that it is safe to place it in a mysql_query(). If binary data is to be inserted, this function must be used.<br><br>mysql_real_escape_string() calls MySQL's library function mysql_real_escape_string, which prepends backslashes to the following characters: \x00, \n, \r, \, ', " and \x1a.<br><br>This function must always (with few exceptions) be used to make data safe before sending a query to MySQL.<br><br>
												<h3>Object oriented style:</h3>
												<pre><code class='language-php'>
$mysqli -> real_escape_string(escapestring)
                                                </code></pre>
												<h3>Procedural style:</h3>
												<pre><code class='language-php'>
mysqli_real_escape_string(connection, escapestring)
                                                </code></pre><br><br>
                                            </div>
                                        </div>
                                     </div>

                                    <br>


                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">


                                                <h2>Parameters</h2><br><br>

                                                <h4>unescaped_string</h4>
                                                The string that is to be escaped.
                                                <br><br>

                                                <h4>link_identifier</h4>

                                                The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

                                                <br><br>


                                                <h4>options</h4>

                                               Associative array of options or bitwise disjunction of flags. If filter accepts options, flags can be provided in "flags" field of array. For the "callback" filter, callable type should be passed. The callback must accept one argument, the value to be filtered, and return the value after filtering/sanitizing it.<br><br>
												<h4>Simple mysql_real_escape_string()</h4>
                                                <pre><code class='language-php'>
// Connect
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    OR die(mysql_error());

// Query
$query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($user),
            mysql_real_escape_string($password));
                                                </code></pre><br><br>
                                                
												<h4>Return Values</h4>

                                                Returns the escaped string, or FALSE on error.

                                                <br><br>
												<h4>Errors/Exceptions</h4>

                                                Executing this function without a MySQL connection present will also emit E_WARNING level PHP errors. Only execute this function with a valid MySQL connection present.

                                                <br><br>







                                            </div>
                                        </div>
                                    </div>


<br>
















                                </div>
                            </div>
                        </div>

						<div id="effect">
                            <div class="card mb-4">
                                <div class="card-header">Effect</div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>The effect of this prevention</h2><br><br>
                                               PHP provides mysql_real_escape_string() to escape special characters in a string before sending a query to MySQL. This function was adopted by many to escape single quotes in strings and by the same occasion prevent SQL injection attacks. However, it can create serious security flaws when it is not used correctly.<br><br>
													The important thing to remember here is that when using mysql_real_escape_string (), you must always add cleaned parameters between the quotation marks, otherwise, SQL injection vulnerabilities will be created.<br><br>For instance, if you have a string like <strong>I'm a string</strong>, the single quote character (‘) can be used by an attacker to manipulate the database query being created and cause a SQL injection. Running it through mysql_real_escape_string()produces <strong>I\'m a string</strong>, which adds a backslash to the single quote, escaping it. As a result, the whole string now gets passed as a harmless string to the database, instead of being able to participate in query manipulation.<br><br>

														There is one drawback with this approach: it’s a really, really old technique that goes along with the older forms of database access in PHP. Frankly, the only purpose of this function is to escape the very quotes that were used to delimit a string. Properly formatted string literal would be fairly safe just as a side effect.<br><br>
													
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div id="example">
                            <div class="card mb-4">
                                <div class="card-header">Example</div>
                                <div class="card-body">


                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Example </h2>The correct way to prevent database attacks:<br><br>

                                                <pre><code class='language-php'>
&lt;?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

// Escape special characters, if any
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql="INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('$firstname', '$lastname', '$age')";

mysqli_close($con);
?&gt;
                                                </code></pre>


                                            </div>
                                        </div>
                                    </div>

<br>
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Demo </h2><br><br>
                                                <div id="desktop">
                                                    <div class="topbar">
                                                        <div class="topbox">
                                                        </div>
                                                    </div>

                                                    <div class="secbar">
                                                        <div class="secbox">
                                                            <a href=""><img src="/img/msbc.svg" alt=""></a>
                                                        </div>
                                                    </div>

                                                    <div class="mainbar">
                                                        <div id="maintext">

                                                            <div class="maintitle">Stocks</div>

                                                        </div>
                                                    </div>

                                                    <div class="bookbox" id="bookbox" style="background-color: white;">
                                                        <div class="title">
                                                            Stock quote
                                                        </div>

                                                        <hr class="style-three">
                                                        <br><br>


                                                        <div class="bookbox" id="inputbox">



                                                            <span class="inputword">Please enter stock number  </span><br>
                                                            <input id="pw" name="pw" required="" min="1">


                                                            <button class="button" id="logon" >  QUOTE  </button><br><br>


                                                        </div>


                                                        <div   id="wronginput">


                                                            <div class="alert alert-red" role="alert" >
                                                                <h4 class="alert-heading">Wrong input</h4><br>

                                                                <button type="button" class="btn btn-blue m-3" onclick="tryagain()">Try again</button>


                                                            </div>


                                                        </div>

                                                        <div   id="correctinput">


                                                            <div class="alert alert-green" role="alert" >
                                                                <h4 class="alert-heading">Stock price</h4><br>

                                                                <span id="stockprice"></span>

                                                            </div>


                                                        </div>

                                                        <div   id="norecord">


                                                            <div class="alert alert-blue" role="alert">
                                                                <h4 class="alert-heading">No record</h4><br>

                                                                <button type="button" class="btn btn-blue m-3" onclick="tryagain()">Try again</button>

                                                            </div>


                                                        </div>

                                                    </div>




                                                    <div class="bottombar">
                                                        <div class="bottombox">

                                                            <div class="copyright">All quotes delayed a minimum of 15 minutes. &nbsp;&nbsp;&nbsp;&nbsp;

                                                                © 2020 The Macau and Shenchen Banking Corporation Limited. All Rights Reserved.</div>



                                                        </div>

                                                    </div>

                                                    <br><br>


                                                    

                                                </div>



                                            </div>
                                        </div>
                                    </div>


                                                                  <br>




















                                </div>
                            </div>
                        </div>
                        <div id="phpediter">
                            <div class="card mb-4">
                                <div class="card-header">PHPEditer</div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Put the Example of this lesson And kick the RUN button to try it</h2><h4>About this PHPEditer</h4>you enable coding the PHP language in this textarea and the Div will show you the display of what you input. For the problem of how to use the PHPEditer. In each lesson, we given a lot of Example for you to learn the full PHP code that you enable copy and paste that to the textarea and kick the RUN button to execute it.<strong> In this case, the SQL statement is fixed. the $id is fix to 1.</strong> <br><br>
                                               <form action="defenselesson4.php?q=phpediter" method="post">Please kick the button (RUN) and that will view in below: <code >
<textarea rows="15" name="aaa"  id="myTexT" style="width:100%;resize: none;">
<?php

if (isset($_POST['aaa'])) {
echo $_POST['aaa'];
}else{	
?>
&lt;?php
$id = 1;
$new=mysqli_real_escape_string($conn, $id);
///$sql4 = "SELECT .... stockid = $new";
$rs = mysqli_query($conn,$sql4);
if($rs){
    $numrow=mysqli_num_rows($rs);
    if($numrow>0){
        while($rc=mysqli_fetch_assoc($rs)){
            extract($rc);
            echo $price;
        }
	}
}
?&gt;
<?php 
}
?>
</textarea></code><input type="submit" value="run" id="go" class="btn btn-orange m-3">
<?php
if (isset($_POST['aaa'])) {
 if($_POST['aaa']){fun1();
}
}
 



 function fun1()

 {
   //This function will update some column in database to 1
   $myfile = fopen("phpediter/gg.php", "w") or die("Unable to open file!");
   $txt = $_POST['aaa'];
   fwrite($myfile, $txt);
   fclose($myfile);
 }

        


?>

</form>
<iframe id="show" height="90" src="phpediter/writen.php" frameborder="0" width=100%>
</iframe>													
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div id="test">
                            <div class="card mb-4">
                                <div class="card-header">Test</div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Test</h2><br><br>
                                                
                                                <h3><strong>Please answer the Questions below and get the points:</strong></h3>
                                                &nbsp; &nbsp; If you do not know how to do , you can click the tips button below , but your mark will deduct one <br><br>

                                    <div class="alert alert-yellow" role="alert" id="tips1">
                                        Tips 1 : Some answers are hidden on the sentence.
                                    </div>

                                    <div class="alert alert-blue" role="alert" id="tips2">
                                        Tips 2 : you enable to find out the answer in the Example and you need to abide by hints in each Question. 
                                    </div>

                                    <div class="alert alert-green" role="alert" id="tips3">
                                        Answer : <br>
                                        Question 1 answer is <code>real_escape_string</code><br>Question 2 answer is <code>$mysqli -></code><br>Question 3 answer is <code>Object oriented style</code><br>Question 4 answer is <code>mysqli_real_escape_string</code><br>Question 5 answer is <code>Procedural style</code><br>
                                        Question 6 answer is <code>The string that is to be escaped.</code><br>Question 7 answer is <code>Returns the escaped string, or FALSE on error.</code><br>Question 8 answer is <code>I\'m a string</code><br>Question 9 answer is <code>'$firstname', '$lastname', '$age'</code>
                                    </div>

                                    <button type="button" class="btn btn-yellow m-3" id="bu1" onclick="tips1()">Tips 1</button>
                                    <button type="button" class="btn btn-blue m-3" id="bu2" disabled  onclick="tips2()">Tips 2</button>
                                    <button type="button" class="btn btn-green m-3" id="bu3" disabled  onclick="tips3()">Answer</button>
                                                 <h4>1.Which method looks like? Please put the correct answer in the below textbox. </h4><p style="font-size: 13px;"><input type="text" id="test1" name="test1" style="width: 100;height:30;margin-left:0;font-size: 11px;"><code>(escapestring)</code></p>
                                                 <br><br>
                                                <h4>2.What is the missing in this method?</h4><p style="font-size: 13px;"><input type="text" id="test2" name="test2" style="width: 100;height:30;margin-left:0;font-size: 11px;"> <code>MethodStyle(escapestring)</code>
                                                <br><br>
                                                <h4>3.What is the style of above Questions?</h4><input type="text" id="test3" name="test3"style="width: 150;height:30;margin-left:0;font-size: 11px;">
                                                <br><br>
                                                <h4>4.Which method looks like? Please put the correct answer in the below textbox.</h4><p style="font-size: 13px;"><input type="text" id="test4" name="test4"style="width: 150;height:30;margin-left:0;font-size: 11px;"><code>(connection, escapestring)</code><br><br>
                                                <h4>5.What is the style of above Questions?</h4><p style="font-size: 13px;"><input type="text" id="test5" name="test5"style="width: 150;height:30;margin-left:0;font-size: 11px;"><br><br>
                                                <h4>6.What is the definition of unescaped_string?</h4><p style="font-size: 13px;"><input type="text" id="test6" name="test6"style="width: 250;height:30;margin-left:0;font-size: 11px;"><br><br>
                                                <h4>7.What is the definition of Return Values?</h4><p style="font-size: 13px;"><input type="text" id="test7" name="test7"style="width: 250;height:30;margin-left:0;font-size: 11px;"><br><br>
                                                <h4>8.What is the execution when you running it through mysql_real_escape_string()?</h4><p style="font-size: 13px;"><pre><code class='language-php'>
&lt;?php
mysql_real_escape_string("I'm a string"),
?&gt;
                                                </code></pre><input type="text" id="test8" name="test8"style="width: 100;height:30;margin-left:0;font-size: 11px;"><br><br>
                                                <h4>9. What value should put in the (......)? Please answer the Questions by the regular SQL statement such as '$id'.</h4><p style="font-size: 13px;"><pre><code class='language-php'>
&lt;?php
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql="INSERT INTO Persons (FirstName, LastName, Age) 
VALUES (........)";
?&gt;
                                                </code></pre><input type="text" id="test9" name="test9"style="width: 100;height:30;margin-left:0;font-size: 11px;"><br><br>
                                                
                                                <button class="btn btn-red m-3" id="submitest" style="float: right; background-color: #DB4437; border: 2px solid #EEEEEE; font-size: 24px;" >  Submit Test </button><br><br><br>
                                                <div id="Answer1"></div>
                                                
                                                
                                                                                                                                                <br><br>
                                                <div   id="testresultbox" style="display :none;" >


                                                <div class="alert alert-green" role="alert"  >
                                                    <h4 class="alert-heading">TEST result</h4><br>

                                                    
                                                    You get <span id="testmarks">0</span> / 9 marks in this test.<br><br>
													
													<div id="wrongquest" style="display :none;">
													
													The question <span id="wrongquestnum">0</span> you answer wrong	.
														
													</div>
                                                    

                                                    <br><br>

                                                    <a id="nextlesson" href="/level.php" type="button" class="btn btn-blue m-3" style="display :none;" >🎉🎉🎉Congratulations!!!🎉🎉🎉 You finish all the course</a>
                                                    <button id="again" type="button" class="btn btn-blue m-3" onclick="tryagain()" style="display :none;">Try again</button>

                                                </div>


                                            </div>
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>














                    </div>
                    <div class="col-lg-3">
                        <div class="nav-sticky">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav flex-column" id="stickyNav">
                                        <li class="nav-item"><a class="nav-link" href="#knowledge">Knowledge</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#effect">Effect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#example">Example</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#phpediter">PHPEditer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#test">Test</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer mt-auto footer-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 small">Copyright © Coinjection 2020</div>

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>








<script>

    var testmarks=9;
    var answer=0;

    function tips1() {
        document.getElementById("tips1").style.display = "block";
        document.getElementById("bu1").disabled = true;
        document.getElementById("bu2").disabled = false;
        testmarks-=1;
    }

    function tips2() {
        document.getElementById("tips2").style.display = "block";
        document.getElementById("bu2").disabled = true;
        document.getElementById("bu3").disabled = false;
        testmarks-=1;
    }

    function tips3() {
        document.getElementById("tips3").style.display = "block";
        document.getElementById("bu3").disabled = true;
        testmarks=0;
        answer=1;
    }
</script>
<script>
    $(document).ready(function(){
        $("#logon").click(function(){

            pwd=$("#pw").val();
            $.post("sql/lesson4_sql.php", {   pwd: pwd },
                function(data){
                    var obj = JSON.parse(data);
                    var obj2 = obj.table;


                    if (obj.testresult==1) {
                        document.getElementById("inputbox").style.display = "none";
                        document.getElementById("correctinput").style.display = "block";
                        obj2.forEach(function(obj) { document.getElementById("stockprice").innerHTML = document.getElementById("stockprice").innerHTML+obj+"<br><br>"; });
                    }else{
                    	document.getElementById("inputbox").style.display = "none";
                    	document.getElementById("wronginput").style.display = "block";
                    }




                });
        });
    });

    function tryagain() {
        document.getElementById("inputbox").style.display = "block";
        document.getElementById("wronginput").style.display = "none";
        document.getElementById("norecord").style.display = "none";
        document.getElementById("pw").value = "";

    }

    function phpediter() {
        window.open ("phpediter/input5.php", "newwindow", "height=500, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no");

    }
</script>

<script>
    $(document).ready(function(){
        $("#logon_test").click(function(){
            test1=$("#test1").val();
            test2=$("#test2").val();
            test3=$("#test3").val();
            test4=$("#test4").val();
            test5=$("#test5").val();
            test6=$("#test6").val();
            test7=$("#test7").val();
            test8=$("#test8").val();
			test9=$("#test9").val();
            
            

                


                if (test1=="real_escape_string"&&test2=="$mysqli ->"&&test3=="Object oriented style"&&test4=="mysqli_real_escape_string"&&test5=="Procedural style"&&test6=="The string that is to be escaped."&&test7=="Returns the escaped string, or FALSE on error."&&test8=="I\\'m a string"&&test9=="'$firstname', '$lastname', '$age'"){
                	
                    document.getElementById("Answer1").innerHTML = "you get "+ marks+" point";
            		$.post("/updatetable.php", { table: "defense" , lesson: "Lesson4", mark:marks });

                }else {
                	alert('Wrong Input! Please keep try again!');
					document.getElementById("Answer1").innerHTML = "Wrong Input! Please keep try again!";
                }

               
        });
    });


</script>


<script>
    $(document).ready(function(){
        $("#submitest").click(function(){
            test1=$("#test1").val();
            test2=$("#test2").val();
            test3=$("#test3").val();
            test4=$("#test4").val();
            test5=$("#test5").val();
            test6=$("#test6").val();
            test7=$("#test7").val();
            test8=$("#test8").val();
            test9=$("#test9").val();
                      

                if (test1!="real_escape_string"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="1";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",1";
                	}
                	
                }

                if (test2!="$mysqli ->"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="2";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",2";
                	}
                	
                }

                if (test3!="Object oriented style"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="3";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",3";
                	}
                }

                if (test4!="mysqli_real_escape_string"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="4";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",4";
                	}
                }
                
                if (test5!="Procedural style"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="5";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",5";
                	}
                }                
                
                if (test6!="The string that is to be escaped"){
                	if (test6!="The string that is to be escaped."){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="6";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",6";
                	}
                	}
                }  
                
                if (test7!="Returns the escaped string, or FALSE on error"){
                	if (test7!="Returns the escaped string, or FALSE on error."){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="7";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",7";
                	}
                	}
                }                
                
                if (test8!="I\\'m a string"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="8";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",8";
                	}
                }
                
                if (test9!="'$firstname', '$lastname', '$age'"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="9";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",9";
                	}
                } 
                
                       
                
                
                if (testmarks<0){
                	testmarks=0;
                }
                
                if (testmarks!=9){
                	
                	document.getElementById("again").style.display = "inline";
                }else{
                	document.getElementById("nextlesson").style.display = "inline";
                }                
                
                
                document.getElementById("testresultbox").style.display = "block";
                document.getElementById("submitest").style.display = "none";
                document.getElementById("testmarks").innerHTML = testmarks;
                $.post("/updatetable.php", { table: "defense" , lesson: "Lesson4", mark:testmarks });


               
        });
    });

    function tryagain() {
        
        window.location.href = "https://superailgun.com/lesson/defense/defenselesson3.php#test";
        location.reload();

    }
    
        
</script>










</body></html>