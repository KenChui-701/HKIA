



<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/maymay.css">
  <meta charset="utf-8">
  <title>PHP editer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer=""></script>
    <link href="/css/prism.css" rel="stylesheet" />
    <script src="/css/prism.js"></script>
</head>
<body>


<div class= "left">
<div class="row">
<div id="effect">
                            <div class="card mb-4">
                                <div class="card-header"><h2>PHP editer</h2></div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                <br><br>
                                                <h5>this editer enable that you to try the PHP code which you learn in this lesson</h5><br><br>
												
												<form action="input.php" method="post">Please kick the button (GO) and that will view in below: <input type="submit" value="go"><br><code>
<textarea rows="15" cols="80" name="aaa"  id="myTexT">
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
</textarea></code>
<?php
if (isset($_POST['aaa'])) {
 if($_POST['aaa']){fun1();}
}
 



 function fun1()

 {
   //This function will update some column in database to 1
   $myfile = fopen("gg.php", "w") or die("Unable to open file!");
   $txt = $_POST['aaa'];
   fwrite($myfile, $txt);
   fclose($myfile);
 }



?>

</form>
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div id="effect">
                            <div class="card mb-4">
                                <div class="card-header"><h2>The Display of this PHP editer</h2></div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content bg-light">
                                            <div class="sbp-preview-text">
                                                In this box, you will see the variation<br>
                                               

<iframe   height="490" src="writen.php" frameborder="0" width=100%></iframe>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
</div>


</body>
</html>