
<html lang="en" data-kantu="1" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lesson 6</title>
    <link href="/css/lesson.css" rel="stylesheet">
    <link rel="icon" type="image/webp" href="/img/coin.webp" />

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


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

                if(isset($_SESSION['username'])) { include("../../getlevel.php"); ?>



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
                    <a class="nav-link" href="attacklesson1.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 1 </b>???Login Bypass</a>

                    <a class="nav-link" href="attacklesson2.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 2 </b>???Database Location</a>

                    <a class="nav-link" href="attacklesson3.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 3 </b>???Database Version</a>

                    <a class="nav-link" href="attacklesson4.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 4 </b>???Database Hostname</a>

                    <a class="nav-link" href="attacklesson5.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 5 </b>???Database Schemas</a>

                    <a class="nav-link disabled" href="attacklesson6.php" style="color:#0061f2;">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 6 </b>???Table Names</a>

                    <a class="nav-link" href="attacklesson7.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 7 </b>???Table Columns</a>

                    <a class="nav-link" href="attacklesson8.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 8 </b>???Users Password</a>

                    <a class="nav-link" href="attacklesson9.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 9 </b>???Drop Table</a>

                    <a class="nav-link" href="attacklesson10.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 10 </b>???Create Admin</a>
						
						
						
						
						
						
			<div class="sidenav-menu-heading">Defense lesson</div>
                    <a class="nav-link" href="/lesson/defense/defenselesson1.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 1 </b>???Regular Expression</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson2.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 2 </b>???Prepared Statement I</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson3.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 3 </b>???Prepared Statement II</a>

                    <a class="nav-link" href="/lesson/defense/defenselesson4.php">
                        <div class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <b>Lesson 4 </b>???Special Characters</a>

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
                            <span> &nbsp; Attack Lesson 6</span>
                        </h1>
                        <div class="page-header-subtitle">In this lesson, we will teach you how to get some table names of the database</div>
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
                                                <h2>Get table names of the database</h2><br><br>
                                                A relational database is made up of several components, of which the table is most significant.  The database table is where all the data in a database is stored, and without tables, there would not be much use for relational databases.<br><br>

                                                A database consists of one or more tables.  Each table is made up of rows and columns.  If you think of a table as a grid, the column go from left to right across the grid and each entry of data is listed down as a row.<br><br>
                                                The SQL syntax executed by PHP is as follows. The main function is to retrieve all table names of the database in any table..<br><br>


                                                <div class="tab-pane active">
                                                            <pre class="  language-markup">
                                                                <code class="  language-markup">
<span class="sqlkeywordcolor">SELECT</span> table_name <span class="sqlkeywordcolor">FROM</span> information_schema.tables
                                                                </code></pre>
                                                </div><br><br>

                                                In this case, users can get all table names of the database.<br><br>
                                                If the PHP file is allowed to execute two SQL commands at the same time. It will be:



                                                <br><br>

                                                <div class="tab-pane active">
                                                            <pre class="  language-markup">
                                                                <code class="  language-markup">
<span class="sqlkeywordcolor">SELECT</span> * <span class="sqlkeywordcolor">FROM</span> t_user <span class="sqlkeywordcolor">WHERE</span> id = 1; <span class="sqlkeywordcolor">SELECT</span> table_name <span class="sqlkeywordcolor">FROM</span> information_schema.tables
                                                                </code></pre>
                                                </div><br><br>



                                                In this case, the attacker can get all table names of the database by query.

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
                                                <h2>The effect of this SQL injection</h2><br><br>
                                                First of all, the attacker will get all table names of the database. The attacker would know how to formulate correct commands, hence able to attack the database.
                                                If the attacker gets all table schemas, table names and columns, the database will be transparent to attackers.
                                                (You can go to Lesson 4-7 to learn it.) In this case, the attacker can do without guessing the table and column to download some sensitive data.
                                                It will make the company lost the reputation.

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

                                    &nbsp; &nbsp; Example email : Ken@gmail.com <br><br>

                                    &nbsp; &nbsp; If you do not know how to do , you can click the tips button below , but your mark will deduct one <br><br>

                                    <div class="alert alert-yellow" role="alert" id="tips1">
                                        Tips 1 : Input two sql commands
                                    </div>

                                    <div class="alert alert-blue" role="alert" id="tips2">
                                        Tips 2 : <code>information_schema.tables</code> is a table to record all table data
                                    </div>

                                    <div class="alert alert-green" role="alert" id="tips3">
                                        Tips 3 : Input <code>67658798;SELECT table_name FROM information_schema.tables WHERE table_schema != 'mysql' AND table_schema != 'information_schema' AND table_schema != 'performance_schema' AND table_schema != 'sys'</code> in phone number
                                    </div>

                                    <button type="button" class="btn btn-yellow m-3" id="bu1" onclick="tips1()">Tips 1</button>
                                    <button type="button" class="btn btn-blue m-3" id="bu2" disabled  onclick="tips2()">Tips 2</button>
                                    <button type="button" class="btn btn-green m-3" id="bu3" disabled  onclick="tips3()">Tips 3</button>

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

                                                <div class="maintitle">Sign up email and phone number to receive special offers and promotions from doctorcard </div>

                                            </div>
                                        </div>

                                        <div class="bookbox" id="bookbox">
                                            <div class="title">
                                                Subscribe Now
                                            </div>

                                            <hr class="style-three">
                                            <br><br>


                                                <div class="bookbox" id="inputbox">


                                                    <span class="inputword">Please enter your email</span><br>
                                                    <input id="name" name="name" required="" min="1"><br><br>
                                                    <span class="inputword">Please enter your phone number  </span><br>
                                                    <input id="pw" name="pw" required="" min="1">


                                                    <button class="button" id="logon" style="background-color: #fb8033;">  SUBSCRIBE  </button><br><br>


                                                </div>


                                            <div   id="wronginput">


                                                <div class="alert alert-red" role="alert" >
                                                    <h4 class="alert-heading">Wrong Answer</h4><br>
                                                    The SQL query that you input : <code>SELECT * FROM newspaper WHERE `email` ='<span id="query_id">0</span>' and `phone`=<span id="query_pw">0</span>"</code><br><br>

                                                    If you do not know how to do , you can click the tips button , but your mark will deduct one. <br><br>
                                                    <button type="button" class="btn btn-blue m-3" onclick="tryagain()">Try again</button>

                                                </div>


                                            </div>

                                            <div   id="correctinput">


                                                <div class="alert alert-green" role="alert" >
                                                    <h4 class="alert-heading">Corrent Answer</h4><br>

                                                    Well done! you now learned how to get table names of the database. <br>
                                                    You get <span id="marks">0</span> / 3 marks in lesson 6.<br><br>

                                                    The SQL query that you input : <code>SELECT * FROM newspaper WHERE `email` ='<span id="query_id_1">0</span>' and `phone`=<span id="query_pw_1">0</span>"</code><br><br>


                                                    The respond of execute your SQL query :<br><br>

                                                    <span id="stockprice"></span>


                                                    <a href="attacklesson7.php" type="button" class="btn btn-blue m-3" >Lesson 7</a>

                                                </div>


                                            </div>

                                        </div>




                                        <div class="bottombar">
                                            <div class="bottombox">

                                                <div class="copyright"> &nbsp;&nbsp;&nbsp;&nbsp;

                                                    ?? 1994-2020 Doctorcard. Doctorcard is an Equal Opportunity Employer.</div>



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
                                        <li class="nav-item"><a class="nav-link" href="#test">Test</a></li>

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
                    <div class="col-md-6 small">Copyright ?? Coinjection 2020</div>

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

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

<script>
    $(document).ready(function(){
        $("#logon").click(function(){
            id=$("#name").val();
            pwd=$("#pw").val();
            $.post("sql/lesson6_sql.php", {  id: id, pwd: pwd },
                function(data){
                    var obj = JSON.parse(data);
                    var obj2 = obj.table;

                if (obj.testresult==0){
                    document.getElementById("inputbox").style.display = "none";
                    document.getElementById("wronginput").style.display = "block";
                    document.getElementById("query_id").innerHTML = id;
                    document.getElementById("query_pw").innerHTML = pwd;

                }else {
                    document.getElementById("inputbox").style.display = "none";
                    document.getElementById("correctinput").style.display = "block";
                    $.post("/updatetable.php", { table: "attack" , lesson: "Lesson6", mark:marks });
                    document.getElementById("marks").innerHTML = marks;
                    document.getElementById("query_id_1").innerHTML = id;
                    document.getElementById("query_pw_1").innerHTML = pwd;

                    obj2.forEach(function(obj) { document.getElementById("stockprice").innerHTML = document.getElementById("stockprice").innerHTML+obj+" ,Thank you your subscribe!<br><br>"; });



                }

                });
        });
    });

    function tryagain() {
        document.getElementById("inputbox").style.display = "block";
        document.getElementById("wronginput").style.display = "none";
        document.getElementById("pw").value = "";

    }
</script>





</body></html>