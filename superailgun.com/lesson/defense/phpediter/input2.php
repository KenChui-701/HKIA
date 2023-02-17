



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
<form action="input2.php" method="post">
<textarea rows="num" cols="num" name="aaa"  id="myTexT" style="width: 100px; height: 100px;">
&lt;?php
 $str="fintech.543-vtc@abcweb.com";   
                     $example1="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";  
                     $example2="/^[\w]*@[\w-]+(\.[\w-]+)+$/" ;
                     //$example1 這組正則允許 "fintech.543-vtc@abcweb.com" 
                     //但 $example2 僅允許 "fintech543vtc@abcweb.com" ，字串內不包含 .和 -
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