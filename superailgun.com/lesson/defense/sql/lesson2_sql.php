
<?php




$num = $_POST["pwd"];


$example1="/^([0-9]){1,4}$/";

include("../../../conn/connection4test.php");
$sql = "SELECT price FROM stock WHERE stockid = $num";

$dbdata = array();


if(preg_match($example1, $num)) {

    $rs = mysqli_query($conn,$sql);
    $numrow=mysqli_num_rows($rs);
    if($numrow>0){
        while($rc=mysqli_fetch_assoc($rs)){
            extract($rc);
            $dbdata['testresult']=1;
            $dbdata['table'][]=$price;


        }
    }else{
        $dbdata['testresult']=0;
    }


} else {
    $dbdata['testresult']=2;
}




echo json_encode($dbdata);


mysqli_close($conn);



?>


