



<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/maymay.css">
  <meta charset="utf-8">
  <title>PHP editer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class= "left">
<div class="row">




<div class="col-6" id="ss">
<form action="input5.php" method="post">
<textarea rows="10" cols="50" name="aaa"  id="myTexT">
&lt;?php
$new= htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new;
// &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;         
                              
?&gt;
</textarea>

<input type="submit" value="go">
</form>





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


<div id="tips">
</div>  
</div>
<div class="col-6" id="right"><iframe   height="600" src="writen.php" frameborder="0"></iframe></div>

</div>
</div>
</body>
</html>