
<html lang="en" data-kantu="1" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesson 1</title>
    <link href="/css/lesson.css" rel="stylesheet">
    <link rel="icon" type="/image/webp" href="/img/coin.webp" />

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js"></script>

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
    
    #editor{
    height: 100%;
    width:70%;
    display:inline-block;
    font-size: 10px;
}

#container {
    height:300px;
	width:100%;
  white-space : nowrap; 
  overflow : hidden;
  position:relative;
    font-size: 20px;
}

#iframe{
	height:100%;
	display:inline-block;
	width:50%;
}
#editor1{
    height: 100%;
    width:70%;
    display:inline-block;
    font-size: 10px;
}

#container1{
    height:300px;
	width:100%;
  white-space : nowrap; 
  overflow : hidden;
  position:relative;
    font-size: 20px;
}

#iframe1{
	height:100%;
	display:inline-block;
	width:50%;
}
#editor2{
    height: 100%;
    width:70%;
    display:inline-block;
    font-size: 10px;
}
#container2{
    height:300px;
	width:100%;
  white-space : nowrap; 
  overflow : hidden;
  position:relative;
    font-size: 20px;
}

#iframe2{
	height:100%;
	display:inline-block;
	width:50%;
}
#editor3{
    height: 100%;
    width:70%;
    display:inline-block;
    font-size: 10px;
}
#container3{
    height:300px;
	width:100%;
  white-space : nowrap; 
  overflow : hidden;
  position:relative;
    font-size: 20px;
}

#iframe3{
	height:100%;
	display:inline-block;
	width:50%;
}
    
    
    </style>


<body class="nav-fixed" onload="ready()">


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
                include("../../getlevel.php");
                ?>



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
                    <a class="nav-link disabled" href="/lesson/defense/defenselesson1.php" style="color:#0061f2;">
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
                            <span> &nbsp; Defense Lesson 1</span>
                        </h1>
                        <div class="page-header-subtitle">In this lesson, we will teach you Regular Expression(regexp)</div>
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
                                                <h2><strong>Regular Expression</strong>(regexp)</h2><br><br>
                                                Regular expressions are patterns that are used to match character combinations in a string. In JavaScript, regular expressions are also objects. These patterns are used in RegExp's exec and test methods, as well as String's match, replace, search, split, and other methods.<br><br>SQL injection attacks are staged by sending malicious SQL commands to database servers through web requests. Any input channel can be used to send the malicious commands, including &lt;input&gt; elements, query strings, cookies and files.<br><br>
                                                When users enter their credentials and press the “log in” button, the information is posted back to your web server, where it is combined with an SQL command.<br><br>
                                                <div class="tab-pane active">
                                                            <pre class="  language-markup">
                                                                <code class="  language-markup">
	&lt;input type="text" pattern="<span class="sqlkeywordcolor">regexp</span>"&gt;
                                                                </code></pre>
                                                </div><br><br>
                                                
                                                
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
                                                            <b>\</b></td>
                                                        <td width="45%" valign="top">Marks the next character as a special character or text. For example, n corresponds to the character n and \ n corresponds to the newline character. The sequence \\ corresponds to \, \ (corresponds to (.</td>
                                                        <td width="46%" valign="top">\([a-z]{1,}\)<br>
                                                            <font color="#808080">Note: Grabbing the English letters () in the string (English characters only)</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>^</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponding to<span style="background-color: #FFFFE1">the beginning of the input</span></td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">^n<br>
                                                            <font color="#808080">Note: grab the first word in the entire string that starts with n</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>$</b></td>
                                                        <td width="45%" valign="top">Corresponding to<span style="background-color: #FFFFE1">the ending of the input</span></td>
                                                        <td width="46%" valign="top">$n<br>
                                                            <font color="#808080">Note: grab the last word in the whole string that starts with n</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>*</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to the previous character
                                                            <span style="background-color: #FFFFE1">0 or more times</span></td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">\[img\]*http://[a-z0-9./%\?_-]{1,}\.[a-z]{1,}\[/img]<br>
                                                            <font color="#808080">Note: Look for information with [img] http: // PIC URL [/ img] in the entire string. For example: [img] http://www.microsoft.com/bill.gif [/ img] is one Exact results</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>+</b></td>
                                                        <td width="45%" valign="top">Corresponds to the previous character<span style="background-color: #FFFFE1">One or more times</span></td>
                                                        <td width="46%" valign="top">\d+<br>
                                                            <font color="#808080">Note: Find all numbers from a string</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>?</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to the previous character
                                                            <span style="background-color: #FFFFE1">0 times or once</span></td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">&lt;img src=["|"|']?[a-z0-9./%\?_-]{1,}\.[a-z]{1,}["\|"\|']?&gt;<br>
                                                            <font color="#808080">Note: Use a src attribute to restrict the HTML texture syntax from a string. Note that if this pattern is written in "", you need to change "" in the pattern to ""</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>.</b></td>
                                                        <td width="45%" valign="top">Corresponds to any single character except a newline character</td>
                                                        <td width="46%" valign="top">\d.<br>
                                                            <font color="#808080">Note: Look for any number less than two characters in length from a string (length to two are included)</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>(pattern)</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">
                                                            Compare patterns and record matching items. Corresponding substrings are available through the "Items"<b>[0]...[n]</b>From the results <b>Matches</b>
                                                            Retrieved from the collection. To match parentheses (), use \ (or \)</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">
                                                            ([1-2]?[0-9]?[0-9])\.([1-2]?[0-9]?[0-9]\.){2}([1-2]?[0-9]?[0-9])<br>
                                                            <font color="#808080">Note: Search IP data from a string (this requires additional use of if ... else ... end if to determine the range of IP to increase the accuracy)</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>x|y</b></td>
                                                        <td width="45%" valign="top">For x or y‧</td>
                                                        <td width="46%" valign="top">Heaven | Earth +<br>
                                                            <font color="#808080">Note: Find the text part of the number heaven or earth from a string</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>{n}</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">n Is a positive integer,<span style="background-color: #FFFFE1">have to</span>Corresponds exactly n times.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">\d{3}-\d{4}<br>
                                                            <font color="#808080">Note: Search for the first three characters and the last four characters from a string‧ For example: 412-5555</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>{n,}</b></td>
                                                        <td width="45%" valign="top">n Is a positive integer,<span style="background-color: #FFFFE1">at least</span>Should correspond to n times.</td>
                                                        <td width="46%" valign="top">a{2,}<br>
                                                            <font color="#808080">Note: Search for the two characters aa from a string</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>{n,m}</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Both m and n are positive integers and should correspond at least n times and at most m times.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">
                                                            ([a-z0-9\-_]){1,}@([a-z0-9\.\-]){1,}\.[a-z]{2,3}(\.[a-z]{1,})*<br>
                                                            <font color="#808080">Note: search email pattern from a string</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>[xyz]</b></td>
                                                        <td width="45%" valign="top">This is a character set that can correspond to any enclosed character.</td>
                                                        <td width="46%" valign="top">[(@_@)(^_^)(&gt;_&lt;)(X_X)]<br>
                                                            <font color="#808080">Note: Search for several text facial expressions directly from the entire string</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>[^xyz]</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">This is a negative character set, corresponding to any unenclosed characters.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">[^(@_@)^(^_^)^(&gt;_&lt;)^(X_X)]<br>
                                                            <font color="#808080">Note: Except for some specific table words, select all text</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>[a-z]</b></td>
                                                        <td width="45%" valign="top">This is a character range that corresponds to any character in the specified range.</td>
                                                        <td width="46%" valign="top">[0-9]<br>
                                                            <font color="#808080">Note: Find characters with a value between 0 and 9</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>[^m-z]</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">This is a negative character range, corresponding to any character outside the specified range.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">[^a-z]{1,}<br>
                                                            <font color="#808080">Note: Search for characters other than a-z‧ Note that if {1,} is present, the results will be displayed in sentences or words. If you remove it, you will display one by one</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\b</b></td>
                                                        <td width="45%" valign="top">Corresponding to one<span style="background-color: #FFFFE1">Text</span>Boundary
                                                            (word boundary), Which is the position between the text and the space.</td>
                                                        <td width="46%" valign="top">(\d{1,})\b<br>
                                                            <font color="#808080">Note: Finding the tail from a string is a result of numbers (please note that there is a difference between {1,} and no {1,})</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\B</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponding to one<span style="background-color: #FFFFE1">Non-text</span>Boundary.ea*r\B
                                                            Can correspond "ear" of "never early" </td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\d</b></td>
                                                        <td width="45%" valign="top">correspond<span style="background-color: #FFFFE1">digital</span>characters, equivalent
                                                            [0-9]</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\D</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">correspond<span style="background-color: #FFFFE1">Non-numeric</span>Characters, equivalent
                                                            [^0-9]</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\f</b></td>
                                                        <td width="45%" valign="top">Corresponds to a form feed character.</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\n</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to a newline character.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\r</b></td>
                                                        <td width="45%" valign="top">Corresponds to a reset character.</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\s</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to any white space, including spaces, tabs, page breaks, etc., equivalent to [&nbsp;\f\n\r\t\v]</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\S</b></td>
                                                        <td width="45%" valign="top">Correspond to any<span style="background-color: #FFFFE1">Non-blank</span>Characters, equivalent
                                                            [^&nbsp;\f\n\r\t\v]</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\t</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to an anchor character.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\v</b></td>
                                                        <td width="45%" valign="top">Corresponds to a vertical anchor.</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\w</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Correspondence including the bottom line<span style="background-color: #FFFFE1">Any text character</span>Is equivalent to [A-Za-z0-9_]</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\W</b></td>
                                                        <td width="45%" valign="top">Corresponds to any non-text character, equivalent to [^ A-Za-z0-9_].</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\num</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">Corresponds to num, where num is a positive integer. It's a reference back to memory fit project. For example, (.) \ 1 corresponds to two consecutive identical characters.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" valign="top">
                                                            <b>\n</b></td>
                                                        <td width="45%" valign="top">For n, where <i>n</i> Is an octal escape value. The octal escape value must be equal to the length of 1, 2, or 3 digits. For example, \ 11 and \ 011 can correspond to one anchor character. \ 0011 is equivalent to \ 001 and 1. The octal escape value must not exceed 256, otherwise the expression will only use the first two numbers. This character allows universal expressions to use ASCII code.</td>
                                                        <td width="46%" valign="top">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="9%" bgcolor="#FAFAFA" valign="top">
                                                            <b>\xn</b></td>
                                                        <td width="45%" bgcolor="#FAFAFA" valign="top">For n, where <i>n</i>
                                                            Is a hexadecimal escape value. The hexadecimal escape value must be exactly 2 digits long. For example \ x41 corresponds to A. \ x041 is equivalent to \ x04 and 1. This character allows universal expressions to use ASCII code.</td>
                                                        <td width="46%" bgcolor="#FAFAFA" valign="top">


                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table><br><br>
												<h2>Example</h2> Search for characters other than a-z‧ Note that if {1,} is present, the results will be displayed in sentences or words. If you remove it, you will display one by one
												<div class="tab-pane active">
                                                            <pre class="  language-markup">
                                                                <code class="  language-markup">
	&lt;input type="text" pattern="<span class="sqlkeywordcolor">[^a-z]{1,}</span>"&gt;
                                                                </code></pre>
                                                </div><br><br>
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
                                                
                                                The effect of the situation that the attackers testing is it the target website or no for sql injection. The from the input is the common testing way for the attackers. In order to eliminate the risk of executing the injected SQL code, please analyze all the SQL statements for unsupported behavior before executing the statement. Unsupported behavior is an unexpected statement type. 
												<br><br>
												Such as we are executing a select statement, so if we find an insert, update, or delete operation, we know that the code has been injected. Another unsupported behavior is the execution of multiple statements generated by statement breaks (semicolons). 
												<br><br>
												Therefore, if more than one statement is found, we know that the code has been injected. We will use three regular expressions to help parse and verify sql statements: 1. Regular expressions used to identify text blocks. 2. Regular expressions used to identify sentence breaks. 3. Regular expressions used to identify SQL statements. While the web designer has not set up the input pattern for each input. Technically, this is entirely possible, although doing so will also make the database useless. It does indeed detect any possible SQLi.

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
                                                <h2>Input Example</h2>
                                                <p> try to test the input prevention skill:</p>

                                                <br><br>
                                                
												
                                                <h4>Example 1</h4>  <br>  
                                                    In Example 1, i hope that you enable to set up the <strong>Password limit of at least 5 digits.</strong> As you can try, the from enable to submit anything now. <br>
                                                <div id="container"> <br>
                                                	
                                                	
                                                    <div class="line_01"></div>
                                                
                                                    <div id="editor"></div>
                                                    <iframe id="iframe" frameborder="0">
                                                    </iframe>
                                                    
                                                </div>
                                                <br><br><br>
                                               
                                                <h4>Example 2</h4> <br>   
                                                    In Example 2, I hope that you enable to set up the <strong>Password with UpperCase, LowerCase and Number</strong> As you can try, the form enable to submit anthing now. <br> Remember that the first group is Number, second group is UpperCase and last group is LowerCase.
                                               <div id="container1"> <br>
		                                            
		                                            
                                                    <div class="line_01"></div>
                                                  
                                                    <div id="editor1"></div>
                                                    <iframe id="iframe1" frameborder="0">
                                                    </iframe>
                                                </div>
                                                <br><br><br>
                                                
                                                <h4>Example 3</h4>   <br> 
                                                    In Example 3, I hope that you enable to set up the <strong>Credit Card Number</strong> As you can try, the form enable to submit anthing now.  Remember that the length of Credit Card is 13 to 16. <br>
                                                <div id="container2"><br>
                                                	
                                                	
                                                    <div class="line_01"></div>
                                                
                                                    <div id="editor2"></div>
                                                    <iframe id="iframe2" frameborder="0">
                                                    </iframe>
                                                </div>
                                                <br><br><br>
                                                
                                                    <h4>Example 4</h4><br>
                                                    In Example 4, I hope that you enable to set up the <strong>email</strong> As you can try, the form enable to submit anthing now. <br>
                                                    
                                                 <div id="container3">  <br> 
                                                 
                                                    <div class="line_01"></div>
                                                    <div id="editor3"></div>
                                                    <iframe id="iframe3" frameborder="0">
                                                    </iframe>
                                                </div>
                                                <br><br><br>
                                                

                                                        
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
                                                
                                                
                                                <strong>Note: In this Question, the answer must start from the lower case and the second is Upper Case when the Questions were mixed with LowerCase, UpperCase and number or symbol.</strong><br><br>
                                                &nbsp; &nbsp; If you do not know how to do , you can click the tips button below , but your mark will deduct one.<br>
                                                &nbsp; &nbsp; If you click the answer button , you will get zero marks.
                                                <br>
<div class="alert alert-yellow" role="alert" id="tips1">
Tips 1 : the partten table view that the usage
</div>
<div class="alert alert-blue" role="alert" id="tips2">
Tips 2 : Input <code>pattern="[....]{.....}"required</code> in Example
</div>
<div class="alert alert-green" role="alert" id="tips3">
Answer:<br>
Question 1 answer is<code>[a-zA-Z0-9]{8,}</code><br>
Question 2 answer is <code>(?=.*[A-Z])</code><br>
Question 3 answer is<code>[0-9]{13,16}</code><br>
Question 4 answer is<code>[a-z0-9._%+-]+@[a-z0-9.-]+</code><br>
</div>
<button type="button" class="btn btn-yellow m-3" id="bu1" onclick="if (!window.__cfRLUnblockHandlers) return false; tips1()">Tips 1</button>
<button type="button" class="btn btn-blue m-3" id="bu2" disabled="" onclick="if (!window.__cfRLUnblockHandlers) return false; tips2()">Tips 2</button>
<button type="button" class="btn btn-green m-3" id="bu3" disabled="" onclick="if (!window.__cfRLUnblockHandlers) return false; tips3()">Answer</button>
<br><br>
                                                
                                                
                                                
                                                
                                                <h3><strong>Please answer the Questions below and get the points:</strong></h3>
                                                 <h4>1.Password limit of at least 8 digits</h4><p style="font-size: 13px;"><code>&lt;input type="password" name="pw" pattern="</code><input type="text" id="test1" name="test1" style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>"required &gt;</code></p>
                                                 <br><br>
                                                <h4>2.Password with UpperCase, LowerCase and Number</h4><p style="font-size: 13px;"><code>&lt;input type="password" name="pw" pattern="^(?=.*\d)(?=.*[a-z])</code><input type="text" id="test2" name="test2" style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>(?!.*\s).*$" required&gt;</code></p>
                                                <br><br>
                                                <h4>3.Credit Card Number. length 13 TO 16</h4><p style="font-size: 13px;"><code>&lt;input type="number" name="pw" pattern="</code><input type="text" id="test3" name="test3"style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>"required&gt;</code></p>
                                                <br><br>
                                                <h4>4.email.Give the full pattern.</h4><p style="font-size: 13px;"><code>&lt;input type="email" name="email" pattern="</code><input type="text" id="test4" name="test4"style="width: 100;height:30;margin-left:0;font-size: 14px;"><code>\.[a-z]{2,3}$"required&gt;</code></p><br><br>
                                                <button class="btn btn-red m-3" id="submitest" style="float: right; background-color: #DB4437; border: 2px solid #EEEEEE; font-size: 24px;" >  Submit Test </button><br><br><br>
                                                <div id="Answer"></div>
                                                
                                                
                                                
                                                
                                                <br><br>
                                                <div   id="testresultbox" style="display :none;" >


                                                <div class="alert alert-green" role="alert"  >
                                                    <h4 class="alert-heading">TEST result</h4><br>

                                                    
                                                    You get <span id="testmarks">0</span> / 4 marks in this test.<br><br>
													
													<div id="wrongquest" style="display :none;">
													
													The question <span id="wrongquestnum">0</span> you answer wrong	.
														
													</div>
                                                    

                                                    <br><br>

                                                    <a id="nextlesson" href="defenselesson2.php" type="button" class="btn btn-blue m-3" style="display :none;" >Lesson 2</a>
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
                                        <li class="nav-item"><a class="nav-link" href="#effect">Effect</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#example">Example</a></li>
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
        $("#submitest").click(function(){
            test1=$("#test1").val();
            test2=$("#test2").val();
            test3=$("#test3").val();
            test4=$("#test4").val();
            

                if (test1!="[a-zA-Z0-9]{8,}"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="1";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",1";
                	}
                	
                }

                if (test2!="(?=.*[A-Z])"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="2";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",2";
                	}
                	
                }

                if (test3!="[0-9]{13,16}"){
                	testmarks-=1;
                	document.getElementById("wrongquest").style.display = "block";
                	                	if(document.getElementById("wrongquestnum").innerHTML==0){
                		document.getElementById("wrongquestnum").innerHTML="3";
                	}else{
                		document.getElementById("wrongquestnum").innerHTML+=",3";
                	}
                }

                if (test4!="[a-z0-9._%+-]+@[a-z0-9.-]+"){
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
                $.post("/updatetable.php", { table: "defense" , lesson: "Lesson1", mark:testmarks });


               
        });
    });

    function tryagain() {
        
        window.location.href = "https://superailgun.com/lesson/defense/defenselesson1.php#test";
        location.reload();

    }
    
        
</script>



<script>
    function ready() {
        setupEditor();
        update();
        setupEditor1();
        update1();
        setupEditor2();
        update2();
        setupEditor3();
        update3();
    }

    function update() {
        var idoc = document.getElementById('iframe').contentWindow.document;

        idoc.open();
        idoc.write(editor.getValue());
        idoc.close();
    }

    function setupEditor() {
        window.editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/html");
        editor.setValue(`<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="javascript:alert('Submitted')">
    Username: <input type="text" name="usrname" style="width:80px"><br>
    Password: <input type="password" name="pw" pattern="[a-zA-Z0-9]{5,}"  style="width:80px"></br>
    <input type="submit" value="Submit" ">
</form>
</body>
</html>`, 1); //1 = moves cursor to end

        editor.getSession().on('change', function() {
            update();
        });

        editor.focus();


        editor.setOptions({
            fontSize: "10px",
            showLineNumbers: true,
            showGutter: false,
            vScrollBarAlwaysVisible: true,
            enableBasicAutocompletion: false,
            enableLiveAutocompletion: false
        });

        editor.setShowPrintMargin(false);
        editor.setBehavioursEnabled(false);
    }

    function update1() {
        var idoc1 = document.getElementById('iframe1').contentWindow.document;

        idoc1.open();
        idoc1.write(editor1.getValue());
        idoc1.close();
    }

    function setupEditor1() {
        window.editor1 = ace.edit("editor1");
        editor1.setTheme("ace/theme/monokai");
        editor1.getSession().setMode("ace/mode/html");
        editor1.setValue(`<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="javascript:alert('Submitted')">
    Username: <input type="text" name="usrname" style="width:80px"><br>
    Password: <input type="password" name="pw" pattern="^(?=.*d)(?=.*[a-z])(?!.*s).*$"  style="width:80px">
<br>
<input type="submit" value="Submit" ">
</form>
</body>
</html>`, 1); //1 = moves cursor to end

        editor1.getSession().on('change', function() {
            update1();
        });

        editor1.focus();


        editor1.setOptions({
            fontSize: "10px",
            showLineNumbers: true,
            showGutter: false,
            vScrollBarAlwaysVisible: true,
            enableBasicAutocompletion: false,
            enableLiveAutocompletion: false
        });

        editor1.setShowPrintMargin(false);
        editor1.setBehavioursEnabled(false);
    }

    function update2() {
        var idoc2 = document.getElementById('iframe2').contentWindow.document;

        idoc2.open();
        idoc2.write(editor2.getValue());
        idoc2.close();
    }

    function setupEditor2() {
        window.editor2 = ace.edit("editor2");
        editor2.setTheme("ace/theme/monokai");
        editor2.getSession().setMode("ace/mode/html");
        editor2.setValue(`<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="javascript:alert('Submitted')">
    Username: <input type="text" name="usrname" style="width:80px"><br>
    Card Number: <input type="password" name="pw" pattern="[0-9]{13,16}" style="width:80px">
<br>
<input type="submit" value="Submit" ">
</form>
</body>
</html>`, 1); //1 = moves cursor to end

        editor2.getSession().on('change', function() {
            update2();
        });

        editor2.focus();


        editor2.setOptions({
            fontSize: "10px",
            showLineNumbers: true,
            showGutter: false,
            vScrollBarAlwaysVisible: true,
            enableBasicAutocompletion: false,
            enableLiveAutocompletion: false
        });

        editor2.setShowPrintMargin(false);
        editor2.setBehavioursEnabled(false);
    }

    function update3() {
        var idoc3 = document.getElementById('iframe3').contentWindow.document;

        idoc3.open();
        idoc3.write(editor3.getValue());
        idoc3.close();
    }

    function setupEditor3() {
        window.editor3 = ace.edit("editor3");
        editor3.setTheme("ace/theme/monokai");
        editor3.getSession().setMode("ace/mode/html");
        editor3.setValue(`<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <form action="javascript:alert('Submitted')">
        email: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{3}$"   style="width:80px"><br>
        <br>
        <input type="submit" value="Submit" ">
    </form>
</body>
</html>`, 1); //1 = moves cursor to end

        editor3.getSession().on('change', function() {
            update3();
        });

        editor3.focus();


        editor3.setOptions({
            fontSize: "10px",
            showLineNumbers: true,
            showGutter: false,
            vScrollBarAlwaysVisible: true,
            enableBasicAutocompletion: false,
            enableLiveAutocompletion: false
        });

        editor3.setShowPrintMargin(false);
        editor3.setBehavioursEnabled(false);
    }


</script>
<script>

    var marks=3;

    function tips1() {
        document.getElementById("tips1").style.display = "block";
        document.getElementById("bu1").disabled = true;
        document.getElementById("bu2").disabled = false;
        marks-=1;
    }

    function tips2() {
        document.getElementById("tips2").style.display = "block";
        document.getElementById("bu2").disabled = true;
        document.getElementById("bu3").disabled = false;
        marks-=1;
    }

    function tips3() {
        document.getElementById("tips3").style.display = "block";
        document.getElementById("bu3").disabled = true;
        marks-=1;
    }
</script>






</body></html>