
<?php



$password = $_POST["pwd"]; // get user input which name is "pwd"





include("../../../conn/connection4test.php");
$dbdata = array();
$new=mysqli_real_escape_string($conn, $password);
$sql = "SELECT price FROM stock WHERE stockid = $new";
$dbdata['table'][]="Your input: ".$new;
$rs = mysqli_query($conn,$sql);
if($rs){
    $numrow=mysqli_num_rows($rs);
    if($numrow>0){
        while($rc=mysqli_fetch_assoc($rs)){
            extract($rc);
            $dbdata['testresult']=1;
            $dbdata['table'][]="price is ".$price;


        }
    }else{
        $dbdata['testresult']=0;
    }
}else{
	$dbdata['testresult']=0;
}






echo json_encode($dbdata);


mysqli_close($conn);



?>


