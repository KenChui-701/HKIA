
<html lang="en" data-kantu="1" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesson 2</title>
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
	<style>
    
    </style>

<body class="nav-fixed">


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

                    <a class="nav-link disabled" href="/lesson/defense/defenselesson2.php" style="color:#0061f2;">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 2 </b>：Prepared Statement I</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson3.php">
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
                            <span> &nbsp; Defense Lesson 2</span>
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


                                                <h2>preg_match()</h2><br><br>
                                                Just use the prepared statement in your query. Prepared statements are designed to prevent SQL injection, and are much easier than any other method and easy to read and maintain.<br>
                                                the prepared statement reference to this. Also note that if you accidentally use preg_match, it is error-prone, and you also have to consider all the extremes of any given query.

                                                <br><br>
                                                <div class="tab-pane active">
                                                            <pre class="  language-markup">
                                                                <code class='language-php'>
int preg_match( $pattern, $input, $matches, $flags, $offset )
                                                                </code></pre>
                                                </div><br><br>
                                                <dl>
												  <dt>pattern:</dt>
												  <dd>This parameter holds the pattern to search for, as a string.</dd>
												  <dt>input:</dt>
												  <dd>This parameter holds the input string.</dd>
												  <dt>matches:</dt>
												  <dd>If matches exists then it contains results of search. The $matches[0] will contain the text that matched full pattern, $matches[1] will contain the text that matched the first captured parenthesized subpattern, and so on.</dd>
												  <dt>flags: The flags can be following flags:</dt>
												  <dd>
												  	<ul>
													<li><strong>PREG_OFFSET_CAPTURE:</strong> If this flag is passed, for every match the append string offset will be returned.</li>
													<li><strong>PREG_UNMATCHED_AS_NULL:</strong> If this flag is passed, subpatterns which are not matched reports as NULL; otherwise they reports as empty string.</li>
													</ul>
												  </dd>
												  <dt>offset:</dt>
												  <dd>Usually, search starts from the beginning of input string. This optional parameter offset is used to specify the place from where to start the search (in bytes).</dd>
												</dl><br><br>

                                                <h2>Pattern Mode Setting Introduction</h2>
                                                If you want to view the full of Pattern. Please kick back to the lesson 1.<br><br>
			
                                                <table border="0" style="border:1px solid #C0C0C0; font-size: 13px; border-collapse: collapse" width="100%" cellspacing="3" cellpadding="3">
                                                    <tbody>
                                                    <tr>
                                                        <td width="9%" bgcolor="#F7F7F7" valign="top">
                                                            <p align="left"><b>Character</b></p>
                                                        </td>
                                                        <td width="45%" bgcolor="#F7F7F7" valign="top"><b>Description</b></td>
                                                        <td width="46%" bgcolor="#F7F7F7" valign="top"><b>pattern example</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b> .</b></td>
                                                        <td width="45%" valign="top">Matches any single character except a new line</td>
                                                        <td width="46%" valign="top"><span style="background-color: #FFFFE1">/./</span> matches anything that has a single character</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b> ^</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponding to <span style="background-color: #FFFFE1">the beginning of the input</span></td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top"><span style="background-color: #FFFFE1">/^PH/</span> matches any string that starts with PH<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b> $</b></td>
                                                        <td width="45%" valign="top"> Matches pattern at<span style="background-color: #FFFFE1"> the end of the string</span> </td>
                                                        <td width="46%" valign="top"> <span style="background-color: #FFFFE1">/com$/</span> matches youtube.com,yahoo.com Etc.<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b> *</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Matches any zero (0) or more characters
                                                        </td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top"> <span style="background-color: #FFFFE1">/com*/</span> matches computer, communication etc.</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b> +</b></td>
                                                        <td width="45%" valign="top"> Requires preceding character(s) appear at least once </td>
                                                        <td width="46%" valign="top"> <span style="background-color: #FFFFE1">/yah+oo/</span> matches yahoo<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b> \</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top"> Used to escape meta characters
                                                        </td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top"> <span style="background-color: #FFFFE1">/yahoo+\.com/</span>treats the dot as a literal value</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b> [...]</b></td>
                                                        <td width="45%" valign="top"> Character class </td>
                                                        <td width="46%" valign="top"> <span style="background-color: #FFFFE1">/[abc]/</span> matches abc<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b> a-z</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top"> Matches lower case letters
                                                        </td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top"> <span style="background-color: #FFFFE1">/yahoo+\.com/</span>matches fintech, data etc.</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b> A-Z</b></td>
                                                        <td width="45%" valign="top"> Matches upper case letters </td>
                                                        <td width="46%" valign="top"> <span style="background-color: #FFFFE1">/[A-Z]/</span> matches FINTECH, DATA etc.<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b> 0-9</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top"> Matches any number between 0 and 9
                                                        </td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top"> <span style="background-color: #FFFFE1">/1-3/ </span>matches 1,2,3</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                     </div><br><br>
                                     <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Below examples illustrate the preg_match() function in PHP:</h2><br><br>

                                                <pre><code class='language-php'>
&lt;?php
$str="fintech.543-vtc@abcweb.com";
$example1="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
$example2="/^[\w]*@[\w-]+(\.[\w-]+)+$/" ;
// $ example1 This set of regex allows "fintech.543-vtc@abcweb.com"
// but $ example2 only allows "fintech543vtc@abcweb.com" and does not include . And -
function checkString($str, $stand){
    if(preg_match($stand, $str, $hereArray)) {
        return 1;
    } else {
        return 0;
    }
}
echo checkString($str,$example1);
echo checkString($str,$example2);
?&gt;


                                                </code></pre>


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
                                               Enable the students to learn how to use the prepared statement in your query. Prepared statements are designed to prevent SQL injection, and are much easier than any other method and easy to read and maintain. Whether or not a regular expression suffices for filtering depends on the regular expression. If you're going to use the value in SQL statements, the regular expression must in some way disallow  ' and ". Prepared statements are the best way to prevent SQL injection as there may be inputs that are valid in terms of filtering but are still harmful.<br><br>
													To be honest,  It’s possible in theory, but it will make your code harder to develop and harder to maintain. Every instance of input that you use in an SQL query will require a custom-designed regular expression. Regular expressions also have problems supporting some character sets, which make it hard to make safe SQL querie that this method enables to use for the step one prevent- <strong>filtering</strong>
													
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


                                    

<br>
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <h2>Demo</h2><br><br>
                                                &nbsp; &nbsp; Example stock number : 1 <br><br>
												If you want to check the attack is it enable to SELECT. Please try that "<code>1;SELECT column_name FROM information_schema.columns WHERE table_schema != 'mysql' AND table_schema != 'information_schema' AND table_schema != 'performance_schema' AND table_schema != 'sys'group by column_name</code>"<br><br>
                                    
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

														<!--<button class="php" onclick="phpediter()"><span>click and try it ></span></button><br><br>-->
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
                                                <h2>Put the Example of this lesson And kick the run button to try it</h2><h4>About this PHPEditer</h4>you enable coding the PHP language in this textarea and the Div will show you the display of what you input. For the problem of how to use the PHPEditer. In each lesson, we given a lot of Example for you to learn the full PHP code that you enable copy and paste that to the textarea and kick the run button to execute it. <br><br>
                                               <form action="defenselesson2.php#phpediter" method="post">Please kick the run button  and that will view in below:
                                               <code>
<textarea rows="15" name="aaa"  id="myTexT" style="width:100%;resize: none;">
<?php

if (isset($_POST['aaa'])) {
echo $_POST['aaa'];
}else{
?>
&lt;?php
$str="fintech.543-vtc@abcweb.com";
$example1="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
$example2="/^[\w]*@[\w-]+(\.[\w-]+)+$/" ;
// $ example1 This set of regex allows "fintech.543-vtc@abcweb.com"
// but $ example2 only allows "fintech543vtc@abcweb.com" and does not include . And -
function checkString($str, $stand){
    if(preg_match($stand, $str, $hereArray)) {
        return 1;
    } else {
        return 0;
    }
}
echo checkString($str,$example1);
echo checkString($str,$example2);
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
                                                &nbsp; &nbsp; If you click the answer button , you will get zero marks.
                                                <br><br>

                                    <div class="alert alert-yellow" role="alert" id="tips1">
                                        Tips 1 : you enable to find out the answer in the Example. 
                                    </div>

                                    <div class="alert alert-blue" role="alert" id="tips2">
                                        Tips 2 : you also enable to find the answer in the Pattern table in lesson 1 and 2.
                                    </div>

                                    <div class="alert alert-green" role="alert" id="tips3">
                                        Answer : <br>
                                        Question 1 answer is <code>preg_match</code>
                                        <br>Question 2 answer is <code>/^[\w]*@[\w-]+(\.[\w-]+)+$/</code>
                                        <br>Question 3 answer is <code>/^[\d]{1,4}$/</code>
                                        <br>Question 4 answer is <code>0</code>
                                    </div>

                                    <button type="button" class="btn btn-yellow m-3" id="bu1" onclick="tips1()">Tips 1</button>
                                    <button type="button" class="btn btn-blue m-3" id="bu2" disabled  onclick="tips2()">Tips 2</button>
                                    <button type="button" class="btn btn-green m-3" id="bu3" disabled  onclick="tips3()">Answer</button>
                                                 <h4>1. Try to call out this function</h4><p style="font-size: 13px;"><input type="text" id="test1" name="test1" style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>($stand, $str, $hereArray)</code></p>
                                                 <br><br>
                                                <h4>2.Set up the Pattern of email with out . and - Hint:use correspond(\) for value such as [\r].</h4><p style="font-size: 13px;"><code>checkString($str,</code><input type="text" id="test2" name="test2" style="width: 500;height:30;margin-left:0;font-size: 14px;">);
                                                <br><br>
                                                <h4>3.Set up the Pattern of stock number. Hint:the stock number is integerand the length is 1 to 4 and use correspond(\) for value such as [\t].</h4><code>checkString($str,</code><input type="text" id="test3" name="test3"style="width: 500;height:30;margin-left:0;font-size: 14px;">);
                                                <br><br>
                                                <h4>4.what is the return in this situation:</h4><p style="font-size: 13px;"><pre><code class='language-php'>
&lt;?php
$str="fintech.543-vtc@abcweb.com";
$example="/^([0-9A-Za-z]+)$/" ;
function checkString($str, $stand){
    if(preg_match($stand, $str, $hereArray)) {
        return 1;
    } else {
        return 0;
    }
}
echo checkString($str,$example);
?&gt;


                                                </code></pre><input type="text" id="test4" name="test4"style="width: 100;height:30;margin-left:0;font-size: 14px;"><br><br>
                                                <button class="btn btn-red m-3" id="submitest" style="float: right; background-color: #DB4437; border: 2px solid #EEEEEE; font-size: 24px;" >  Submit Test </button><br><br><br>
                                                <div id="Answer1"></div>
                                                
                                                <br><br>
                                                <div   id="testresultbox" style="display :none;" >


                                                <div class="alert alert-green" role="alert"  >
                                                    <h4 class="alert-heading">TEST result</h4><br>

                                                    
                                                    You get <span id="testmarks">0</span> / 4 marks in this test.<br><br>
													
													<div id="wrongquest" style="display :none;">
													
													The question <span id="wrongquestnum">0</span> you answer wrong	.
														
													</div>
                                                    

                                                    <br><br>

                                                    <a id="nextlesson" href="defenselesson3.php" type="button" class="btn btn-blue m-3" style="display :none;" >Lesson 3</a>
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

    function json2table(json, classes) {
        var cols = Object.keys(json[0]);

        var headerRow = "";
        var bodyRows = "";

        classes = classes || "";

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        cols.map(function(col) {
            headerRow += "<th>" + capitalizeFirstLetter(col) + "</th>";
        });

        json.map(function(row) {
            bodyRows += "<tr>";

            cols.map(function(colName) {
                bodyRows += "<td>" + row[colName] + "</td>";
            });

            bodyRows += "</tr>";
        });

        return (
            '<table class="' +
            classes +
            '"><thead><tr>' +
            headerRow +
            "</tr></thead><tbody>" +
            bodyRows +
            "</tbody></table>"
        );
    }



</script>



<script>

    var testmarks=4;
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
            $.post("sql/lesson2_sql.php", { pwd: pwd },
                function(data){

                    var obj = JSON.parse(data);
                    var obj2 = obj.table;


                if (obj.testresult==2){
                    document.getElementById("inputbox").style.display = "none";
                    document.getElementById("wronginput").style.display = "block";
                    document.getElementById("query_id").innerHTML = id;
                    document.getElementById("query_pw").innerHTML = pwd;

                }else if(obj.testresult==1){
                    document.getElementById("inputbox").style.display = "none";
                    document.getElementById("correctinput").style.display = "block";
                    obj2.forEach(function(obj) { document.getElementById("stockprice").innerHTML = document.getElementById("stockprice").innerHTML+obj+"<br><br>"; });


                }else {
                	document.getElementById("inputbox").style.display = "none";
                    document.getElementById("norecord").style.display = "block";
                    document.getElementById("query_id").innerHTML = id;
                    document.getElementById("query_pw").innerHTML = pwd;
                }

                });
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
            

                if (test1!="preg_match"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="1";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",1";
                	}
                	
                }

                if (test2!="/^[\\w]*@[\\w-]+(\\.[\\w-]+)+$/"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="2";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",2";
                	}
                	
                }

                if (test3!="/^[\\d]{1,4}$/"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="3";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",3";
                	}
                }

                if (test4!=0){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="4";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",4";
                	}
                }
                if (testmarks<0){
                	testmarks=0;
                }
                
                if (testmarks!=4){
                	
                	document.getElementById("again").style.display = "inline";
                }else{
                	document.getElementById("nextlesson").style.display = "inline";
                }                
                
                
                document.getElementById("testresultbox").style.display = "block";
                document.getElementById("submitest").style.display = "none";
                document.getElementById("testmarks").innerHTML = testmarks;
                $.post("/updatetable.php", { table: "defense" , lesson: "Lesson2", mark:testmarks });


               
        });
    });

    function tryagain() {
        
        window.location.href = "https://superailgun.com/lesson/defense/defenselesson2.php#test";
        location.reload();

    }
    
        
</script>











</body></html>