
<html lang="en" data-kantu="1" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesson 3</title>
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
                include("../../getlevel.php"); ?>



                    <li class="nav-item">
                        <a class="nav-link" href="/level.php">Hello, <?php echo '[Level'.$level.'] '; echo $_SESSION['username']; ?></a>
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

                    <a class="nav-link disabled" href="/lesson/defense/defenselesson3.php" style="color:#0061f2;">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 3 </b>：Prepared Statement II</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson4.php">
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
                            <span> &nbsp; Defense Lesson 3</span>
                        </h1>
                        <div class="page-header-subtitle">In this lesson, we will teach you Prepared Statement 1</div>
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
                                            	<h2>mysqli_stmt_bind_param</h2>
                                            	If implemented correctly, prepared statements (parameterized queries) offer superior protection against SQL injection. You basically just create the query template with placeholder values and then replace the dummy inputs with the real ones. Escaping is not necessary since it will treat the values as literals; all attempts to inject SQL queries will be interpreted as such.<br><br>
												<code>stmt->bind_param</code> -- Binds variables to a prepared statement as parameters<br><br>
												<h3>Object Oriented Style</h3>
												<pre><code class='language-php'>
$stmt->bind_param('sii', $input_1, $input_2, $input_3);
                                                </code></pre>
                                                <h3>Example of Object Oriented Style</h3>
                                                <pre><code class='language-php'>
&lt;?Php
require "config.php";// Database connection file.

$class='Fintech_1A';
$marks=66;
$id=5;
$query="UPDATE  student SET Fintech_class=?,marks=? WHERE student_id=?";
$stmt = $connection->prepare($query);
if ($stmt) {
$stmt->bind_param('sii', $class, $marks, $id);
$stmt->execute();
echo "Record Updated:";
echo $stmt->affected_rows;
}else{
echo $connection->error;
}
?&gt;
                                                </code></pre><br><br>
                                                <h3>Procedural style</h3>
												<pre><code class='language-php'>
mysqli_stmt_bind_param($stmt, "si",$input_1, $input_2);
                                                </code></pre>
                                                <h3>Example of Procedural style</h3>
                                                <pre><code class='language-php'>
&lt;?Php
$class='Fintech_1A';
$marks=66;
$id=5;
$query="UPDATE  student SET Fintech_class=?,marks=? WHERE student_id=?";
if ($stmt = mysqli_prepare($connection,$query)){
mysqli_stmt_bind_param($stmt, "sii", $class, $mark, $id);
mysqli_stmt_execute($stmt);
echo "Record Updated:";
echo mysqli_affected_rows($connection);

}else{
echo mysqli_error($connection);
}
?&gt;
                                                </code></pre>
                                                <h4>$stmt : Statement identifier</h4><br>
                                                
                                                <h4>Types : 'siid': We used 4 digits here so four variables can be matched, Here is the list of Types</h4>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 13px; border-collapse: collapse" bordercolor="#111111">
                                                    <tbody>
                                                    <tr>
                                                        <td width="100%" valign="top">

                                                            <b>

                                                            </b>
                                                            <table border="0" style="border:1px solid #C0C0C0; font-size: 13px; border-collapse: collapse" width="100%" cellspacing="3" cellpadding="3">
                                                                <tbody>
                                                                <tr>
                                                                    <td width="9%" bgcolor="#F7F7F7" valign="top">
                                                                        <p align="left"><b>Character</b></p>
                                                                    </td>
                                                                    <td width="45%" bgcolor="#F7F7F7" valign="top"><b>Description</b></td>
                                                                    <td width="46%" bgcolor="#F7F7F7" valign="top"><b>example</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                                        <b>  i</b></td>
                                                                    <td width="45%" bgcolor="#FAFAFA" valign="top">corresponding variable has type integer</td>
                                                                    <td width="46%" bgcolor="#FAFAFA" valign="top"> $stmt-&gt;bind_param('i', $phoneNumber);<br>$phoneNumber=12345678;
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="9%" valign="top">
                                                                        <b>  d</b></td>
                                                                    <td width="45%" valign="top">	corresponding variable has type double  </td>
                                                                    <td width="46%" valign="top"> $stmt-&gt;bind_param('d', $kg);<br>$kg=65.2;
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                                        <b>  s</b></td>
                                                                    <td width="45%" bgcolor="#FAFAFA" valign="top">corresponding variable has type string
                                                                    </td>
                                                                    <td width="46%" bgcolor="#FAFAFA" valign="top"> $stmt-&gt;bind_param('s', $idCode);<br>$idCode=Y1234567(8)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="9%" valign="top">
                                                                        <b>  b</b></td>
                                                                    <td width="45%" valign="top">	corresponding variable is a blob and will be sent in packets  </td>
                                                                    <td width="46%" valign="top"> $stmt-&gt;bind_param("b", $null);<br>$stmt-&gt;send_long_data(0, file_get_contents("osaka.jpg"));
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td></tr>
                                                    </tbody>
                                                </table>

                                                <br><br>
                                                Note: The data-parent attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.

                                            </div>
                                        </div>
                                     </div>
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
                                                <h5>Compared to executing SQL statements directly, prepared statements have three main advantages:</h5><br><br>

												Prepared statements reduce parsing time as the preparation on the query is done only once although the statement is executed multiple times. Bound parameters minimize bandwidth to the server as you need to send only the parameters each time, and not the whole query. Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.<br><br><br><br>

                                                <h5>Some student is a bit confused of learning about avoiding SQL injections who don't understand how this prevents SQL injections that they can still input whatever they want in there.</h5>
                                                In fact, The main principle there is using prepared statement which is designed for sending a safe query to db server, this can be done by escaping user input which is not part of the real query, and also checking the query without any (where clause) to check the validity of the query before using any parameters.<br><br>
                                                Bound variables will be escaped automatically by the server. The server inserts their escaped values at the appropriate places into the statement template before execution. A hint must be provided to the server for the type of bound variable, to create an appropriate conversion.<br><br>
                                                <pre><code class='language-php'>
$stmt = $mysqli->prepare("SELECT * FROM student WHERE student_id =?")) {
$stmt->bind_param("i", $id);
$user = "''1''";
                                                </code></pre><br><br>
                                                Notice how there are two letters in quotation marks before the variable. This tells the database variable type. <code>s</code> specifies the name as a string value, and <code>i</code> forces the use period to be an integer.if you do put quotation marks around the quotation marks, it will actually not work <code>?</code>, because it will be treated as a string literal, not a virtual placeholder. You are already telling it that it will be a string literal <code>bind_param ()</code> when called, so even if a malicious user tries to insert SQL into user input, it will still be treated as a string. <code>$stmt-> execute ()</code> and then actually run the code; the last line just closes the prepared statement. We will introduce the method of obtaining results in the "Selection" section.<br><br>
                                                <h5>MySQLi Log:</h5>
                                                <pre><code class='language-php'>
    188 Prepare   SELECT * FROM student WHERE student_id =?
    188 Execute   SELECT * FROM student WHERE student_id ='\'\'1\'\''
    188 Quit
                                                </code></pre><br><br>
												
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
                                                <h2>Example 1 (Insert)</h2>This Example show you that how to use it in the simple way of INSERT the data.<br><br>

                                                <pre><code class='language-php'>
&lt;?php
$sql = "INSERT INTO t_user( name, password) VALUES(?,?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $name, $password);
		$password='asd';
		$name='May';
		$stmt->execute(); 

	 
    printf("%d Row inserted.\n", $stmt->affected_rows);
    echo $name."\n".$password;
	$stmt->close();
?&gt;


                                                </code></pre>


                                            </div>
                                        </div>
                                    </div>

<br>
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Demo 1 (Insert)</h2>In this method, evey input is sucessful. However, the PHP injection would not sucessful as this method will automatically turn it to legal.<br><br>
                                                <div id="desktop">
                                                    <div class="topbar">
                                                        <div class="topbox">
                                                        </div>
                                                    </div>

                                                    <div class="secbar">
                                                        <div class="secbox">
                                                            <a href=""><img src="/img/menulife.svg" alt=""></a>
                                                        </div>
                                                    </div>

                                                    <div class="mainbar">
                                                        <div id="maintext">

                                                            <div class="maintitle">Register</div>

                                                        </div>
                                                    </div>

                                                    <div class="bookbox" id="bookbox" style="background-color: white;">
                                                        <div class="title">
                                                            Register your Menulife Account
                                                        </div>

                                                        <hr class="style-three">
                                                        <br><br>


                                                        <div class="bookbox" id="inputbox">



                                                            <span class="inputword">Please enter your username</span><br>
                                                            <input id="name" name="name" required="" min="1"><br><br>
                                                            <span class="inputword">Please enter your password  </span><br>
                                                            <input id="pw" name="pw" required="" min="1">


                                                            <button class="button" id="logon" style="background-color: #00693d;">  REGISTER  </button><br><br>


                                                        </div>



                                                        <div   id="correctinput">


                                                            <div class="alert alert-green" role="alert" >
                                                                <h4 class="alert-heading">Result</h4><br>



                                                                <span id="stockprice"></span>




                                                            </div>


                                                        </div>

                                                    </div>




                                                    <div class="bottombar">
                                                        <div class="bottombox">

                                                            <div class="copyright">

                                                                © Copyright 2002-2020 . Menulife (International) Limited (Incorporated in Bermuda with limited liability). All rights reserved</div>



                                                        </div>

                                                    </div>

                                                    <br><br>


                                                    

                                                </div>



                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Example 2 (Update)</h2>This Example show you that how to use it in the simple way of UPDATE the data.<br><br>

                                                <pre><code class='language-php'>
&lt;?php
 $sql = "UPDATE t_user SET password = ? WHERE name = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $name, $password);
		$password="test1";
		$name="test";
		$stmt->execute(); 

    echo $name."\n".$password;
	$stmt->close();
	 
?&gt;


                                                </code></pre>


                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    
                                                                        <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Demo 2 (Update)</h2>Example id : 240 <br>If you want to check the attack is it enable to SELECT. Please try that<code> 1;SELECT @@datadir;</code><br><br>
                                                <div id="desktop">
                                                    <div class="topbar">
                                                        <div class="topbox">
                                                        </div>
                                                    </div>

                                                    <div class="secbar">
                                                        <div class="secbox">
                                                            <a href=""><img src="/img/doctorcard.svg" alt=""></a>
                                                        </div>
                                                    </div>

                                                    <div class="mainbar">
                                                        <div id="maintext">

                                                            <div class="maintitle">Your account</div>

                                                        </div>
                                                    </div>

                                                    <div class="bookbox" id="bookbox" style="background-color: white;">
                                                        <div class="title">
                                                            Change your password
                                                        </div>

                                                        <hr class="style-three">
                                                        <br><br>


                                                        <div class="bookbox" id="inputbox2" >

                                                            <span class="inputword">Please enter your id</span><br>
                                                            <input id="name2" name="name2" required="" min="1"><br><br>

                                                            <span class="inputword">Please enter new password  </span><br>
                                                            <input id="pw2" name="pw2" required="" min="1">


                                                            <button class="button" id="logon2" style="background-color: #fb8033;">  CHANGE  </button><br><br>


                                                        </div>




                                                        <div   id="correctinput2">


                                                            <div class="alert alert-green" role="alert" >
                                                                <h4 class="alert-heading">Result</h4><br>


                                                                <span id="stockprice2"></span>



                                                            </div>


                                                        </div>

                                                    </div>




                                                    <div class="bottombar">
                                                        <div class="bottombox">

                                                            <div class="copyright"> &nbsp;&nbsp;&nbsp;&nbsp;

                                                                © 1994-2020 Doctorcard. Doctorcard is an Equal Opportunity Employer.</div>



                                                        </div>

                                                    </div>


                                                    <br><br>


                                                   



                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <br>
                                    
                                                                        <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Example 3 (Delete)</h2>This Example show you that how to use it in the simple way of DELETE the data.<br><br>

                                                <pre><code class='language-php'>
&lt;?php
$sql = "DELETE FROM t_user WHERE name = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $name);
		$name="test";
		$stmt->execute();
		echo $name;
		$stmt->close();
?&gt;


                                                </code></pre>


                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Demo 3 (Delete)</h2><br><br>
                                                <div id="desktop">
                                                    <div class="topbar">
                                                        <div class="topbox">
                                                        </div>
                                                    </div>

                                                    <div class="secbar">
                                                        <div class="secbox">
                                                            <a href=""><img src="/img/botc.svg" alt=""></a>
                                                        </div>
                                                    </div>

                                                    <div class="mainbar">
                                                        <div id="maintext">

                                                            <div class="maintitle">Your account</div>

                                                        </div>
                                                    </div>

                                                    <div class="bookbox" id="bookbox" style="background-color: white;">
                                                        <div class="title">
                                                            Cancel account
                                                        </div>

                                                        <hr class="style-three">
                                                        <br><br>


                                                        <div class="bookbox" id="inputbox3" >

                                                            <span class="inputword">Please enter your account id</span><br>
                                                            <input id="name3" name="name3" type="number" required="" min="1">




                                                            <button class="button" id="logon3" >  CANCEL  </button><br><br>


                                                        </div>




                                                        <div   id="correctinput3">


                                                            <div class="alert alert-green" role="alert" >
                                                                <h4 class="alert-heading">Result</h4><br>


                                                                <span id="stockprice3"></span>



                                                            </div>


                                                        </div>

                                                    </div>




                                                    <div class="bottombar">
                                                        <div class="bottombox">

                                                            <div class="copyright"> &nbsp;&nbsp;&nbsp;&nbsp;

                                                                © 2020 Bank of Ta Ching. All Rights Reserved.</div>



                                                        </div>

                                                    </div>


                                                    <br><br>


                                                    



                                                </div>



                                            </div>
                                        </div>
                                    </div>


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
                                                <h2>Put the Example of this lesson And kick the RUN button to try it</h2><h4>About this PHPEditer</h4>you enable coding the PHP language in this textarea and the Div will show you the display of what you input. For the problem of how to use the PHPEditer. In each lesson, we given a lot of Example for you to learn the full PHP code that you enable copy and paste that to the textarea and kick the RUN button to execute it. <br><br>
                                               <form action="defenselesson3.php?q=phpediter" method="post">Please kick the button (RUN) and that will view in below: 
                                               <code>
                                               	
<textarea rows="15" name="aaa"  id="myTexT" style="width:100%;resize: none;">
<?php

if (isset($_POST['aaa'])) {
echo $_POST['aaa'];
}else{	
?>
&lt;?php

?&gt;
<?php 
}
?>
</textarea></code><input type="submit" value="run" id="go" class="btn btn-orange m-3">
<br>
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
                                                &nbsp; &nbsp; If you do not know how to do , you can click the tips button below , but your mark will deduct one.<br>
                                                &nbsp; &nbsp; If you click the answer button , you will get zero marks.                                                 <br><br>

                                    <div class="alert alert-yellow" role="alert" id="tips1">
                                        Tips 1 : you enable to find out the answer in the Example and Knowledge. 
                                    </div>

                                    <div class="alert alert-blue" role="alert" id="tips2">
                                        Tips 2 : you need to abide by hints in each Question.
                                    </div>

                                    <div class="alert alert-green" role="alert" id="tips3">
                                        Answer : <br>
                                        Question 1 answer is <code>string</code><br>Question 2 answer is <code>integer</code><br>Question 3 answer is <code>Procedural style</code><br>Question 4 answer is <code>'\'\'1\'\''</code><br>
                                        Question 5 answer is <code>$mysqli->prepare</code><br>Question 6 answer is <code>VALUES (?, ?, ?, ?, ?)</code><br>Question 7 answer is <code>bind_param</code><br>Question 8 answer is <code>ssbdi</code><br>Question 9 answer is <code>$stmt->execute();</code><br>Question 10 answer is <code>$stmt->close();</code><br>
                                    </div>

                                    <button type="button" class="btn btn-yellow m-3" id="bu1" onclick="tips1()">Tips 1</button>
                                    <button type="button" class="btn btn-blue m-3" id="bu2" disabled  onclick="tips2()">Tips 2</button>
                                    <button type="button" class="btn btn-green m-3" id="bu3" disabled  onclick="tips3()">Answer</button>
                                                 <h4>1.What is the meaning about <code>s</code> of bind_param? </h4><strong>Please write the answer by full lower case.</strong><p style="font-size: 13px;"><input type="text" id="test1" name="test1" style="width: 100;height:30;margin-left:0;font-size: 14px;"></p>
                                                 <br><br>
                                                <h4>2.What is the meaning about <code>i</code> of bind_param? </h4><strong>Please write the answer by full lower case.</strong><p style="font-size: 13px;"><input type="text" id="test2" name="test2" style="width: 100;height:30;margin-left:0;font-size: 14px;"></p>
                                                <br><br>
                                                <h4>3.Which style is that below case?</h4><pre><code class='language-php'>
&lt;?php
if ($stmt = mysqli_prepare($connection,$query)){
mysqli_stmt_bind_param($stmt, "sii", $class, $mark, $id);
mysqli_stmt_execute($stmt);
echo mysqli_affected_rows($connection);

}else{
echo mysqli_error($connection);
}
?&gt;
                                                </code></pre><input type="text" id="test3" name="test3"style="width: 300;height:30;margin-left:0;font-size: 14px;">
                                                <br><br>
                                                <h4>4.In MySQLi log, what is the Execute when the input value is <code>1</code>? </h4><p style="font-size: 13px;"><input type="text" id="test4" name="test4"style="width: 100;height:30;margin-left:0;font-size: 14px;"><br><br>
                                                <h4>5.Please write the correct answer in the empty places.</h4><p style="font-size: 13px;"><input type="text" id="test5" name="test5"style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>('sii', $input_1, $input_2, $input_3);</code><br><br>
                                                <h4>6.Please write the correct answer in the empty places.</h4><strong>In below case, VALUES() must be upper case. </strong><br>
                                                	
                                                	<p style="font-size: 13px;">"<code>INSERT INTO movies(filmName,filmDescription,filmImage,filmPrice,filmReview)</code><input type="text" id="test6" name="test6"style="width: 200;height:30;margin-left:0;font-size: 14px;">"<br><br>
                                                <h4>7.Please write the correct answer in the empty places.</h4><p style="font-size: 13px;"><code>$stmt-></code><input type="text" id="test7" name="test7"style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>("i", $id);</code><br><br>
                                                <h4>8.Please write the correct answer in the empty places.</h4><p style="font-size: 13px;">
                                                	<table border="0" style="border:1px solid #C0C0C0; font-size: 13px; border-collapse: collapse" width="100%" cellspacing="3" cellpadding="3">
                                                    <tbody>
                                                    <tr>
                                                        <td width="25%" bgcolor="#F7F7F7" valign="top">
                                                            <p align="left"><b>filmName</b></p>
                                                        </td>
                                                        <td width="25%" bgcolor="#F7F7F7" valign="top"><b>filmDescription</b></td>
                                                        <td width="25%" bgcolor="#F7F7F7" valign="top"><b>filmImage</b></td>
                                                        <td width="25%" bgcolor="#F7F7F7" valign="top"><b>filmPrice</b></td>
                                                        <td width="25%" bgcolor="#F7F7F7" valign="top"><b>filmReview</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" valign="top">Kingdom</td>
                                                        <td width="25%" valign="top">movies of the king</td>
                                                        <td width="25%" valign="top">king.jpg</td>
                                                        <td width="25%" valign="top">$65.00</td>
                                                        <td width="25%" valign="top">3</td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                    </tbody>
                                                </table><code>$stmt-> bind_param(' </code><input type="text" id="test8" name="test8"style="width: 100;height:30;margin-left:0;font-size: 14px;"><code> ',$_POST['filmName']<br>,$_POST['filmDescription'],$_POST['filmImage'],$_POST['filmPrice'],$_POST['filmReview']);</code><br><br>
                                                <h4>9.Above the Question 8, what is the next step of implement the method?</h4><p style="font-size: 13px;"><input type="text" id="test9" name="test9"style="width: 100;height:30;margin-left:0;font-size: 14px;"><br><br>
                                                <h4>10.Above the Question 8, what is the last step for close the method?</h4><p style="font-size: 13px;"><input type="text" id="test10" name="test10"style="width: 100;height:30;margin-left:0;font-size: 14px;"><br><br>
                                                
                                                <button class="btn btn-red m-3" id="submitest" style="float: right; background-color: #DB4437; border: 2px solid #EEEEEE; font-size: 24px;" >  Submit Test </button><br><br><br>
                                                
                                                <div id="Answer1"></div>
                                                
                                                
                                                                                                <br><br>
                                                <div   id="testresultbox" style="display :none;" >


                                                <div class="alert alert-green" role="alert"  >
                                                    <h4 class="alert-heading">TEST result</h4><br>

                                                    
                                                    You get <span id="testmarks">0</span> / 10 marks in this test.<br><br>
													
													<div id="wrongquest" style="display :none;">
													
													The question <span id="wrongquestnum">0</span> you answer wrong	.
														
													</div>
                                                    

                                                    <br><br>

                                                    <a id="nextlesson" href="defenselesson4.php" type="button" class="btn btn-blue m-3" style="display :none;" >Lesson 4</a>
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

    var testmarks=10;
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
            id=$("#name").val();
            pwd=$("#pw").val();
            $.post("sql/lesson3.1_sql.php", { id: id,  pwd: pwd },
                function(data){
                    var obj = JSON.parse(data);
                    var obj2 = obj.table;


                    if (obj.testresult==1) {
                        document.getElementById("inputbox").style.display = "none";
                        document.getElementById("correctinput").style.display = "block";
                        obj2.forEach(function(obj) { document.getElementById("stockprice").innerHTML = document.getElementById("stockprice").innerHTML+obj+"<br><br>"; });
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
        window.open ("phpediter/input.php", "newwindow", "height=500, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no");

    }
</script>


<script>
    $(document).ready(function(){
        $("#logon2").click(function(){
            id=$("#name2").val();
            pwd=$("#pw2").val();
            $.post("sql/lesson3.2_sql.php", { id: id,  pwd: pwd },
                function(data){
                    var obj = JSON.parse(data);
                    var obj2 = obj.table;


                    if (obj.testresult==1) {
                        document.getElementById("inputbox2").style.display = "none";
                        document.getElementById("correctinput2").style.display = "block";
                        obj2.forEach(function(obj) { document.getElementById("stockprice2").innerHTML = document.getElementById("stockprice2").innerHTML+obj+"<br><br>"; });
                    }




                });
        });
    });



    function phpediter2() {
        window.open ("phpediter/input3.php", "newwindow", "height=500, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no");

    }
</script>

<script>
    $(document).ready(function(){
        $("#logon3").click(function(){
            id=$("#name3").val();

            $.post("sql/lesson3.3_sql.php", { id: id },
                function(data){
                    var obj = JSON.parse(data);
                    var obj2 = obj.table;


                    if (obj.testresult==1) {
                        document.getElementById("inputbox3").style.display = "none";
                        document.getElementById("correctinput3").style.display = "block";
                        obj2.forEach(function(obj) { document.getElementById("stockprice3").innerHTML = document.getElementById("stockprice3").innerHTML+obj+"<br><br>"; });
                    }




                });
        });
    });



    function phpediter3() {
        window.open ("phpediter/input4.php", "newwindow", "height=500, width=900, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no");

    }
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
            test10=$("#test10").val();            

                if (test1!="string"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="1";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",1";
                	}
                	
                }

                if (test2!="integer"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="2";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",2";
                	}
                	
                }

                if (test3!="Procedural style"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="3";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",3";
                	}
                }

                if (test4!="'\\'\\'1\\'\\''"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="4";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",4";
                	}
                }
                
                if (test5!="$mysqli->prepare"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="5";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",5";
                	}
                }                
                
                if (test6!="VALUES (?, ?, ?, ?, ?)"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="6";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",6";
                	}
                }  
                
                if (test7!="bind_param"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="7";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",7";
                	}
                }                
                
                if (test8!="ssbdi"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="8";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",8";
                	}
                }
                
                if (test9!="$stmt->execute();"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="9";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",9";
                	}
                } 
                
                if (test10!="$stmt->close();"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="10";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",10";
                	}
                }                
                
                
                if (testmarks<0){
                	testmarks=0;
                }
                
                if (testmarks!=10){
                	
                	document.getElementById("again").style.display = "inline";
                }else{
                	document.getElementById("nextlesson").style.display = "inline";
                }                
                
                
                document.getElementById("testresultbox").style.display = "block";
                document.getElementById("submitest").style.display = "none";
                document.getElementById("testmarks").innerHTML = testmarks;
                $.post("/updatetable.php", { table: "defense" , lesson: "Lesson3", mark:testmarks });


               
        });
    });

    function tryagain() {
        
        window.location.href = "https://superailgun.com/lesson/defense/defenselesson3.php#test";
        location.reload();

    }
    
        
</script>








</body></html>