
<?php


$name = $_POST["id"]; // get user input which name is "id"
$pw = $_POST["pwd"]; // get user input which name is "pwd"






include("../../../conn/connection4test.php");

$sql = "INSERT INTO t_user( name, password) VALUES( concat('','$name','') ,'"."$pw"."')";
$rs = mysqli_query($conn,$sql);


$sql = "SELECT * FROM t_user WHERE name = concat('','$name','')";
$rs = mysqli_query($conn,$sql);

$num=mysqli_num_rows($rs);


$dbdata = array();

$dbdata['testresult']=0;

if($num==1){
    while($rc=mysqli_fetch_assoc($rs)){

        $dbdata['table'][]=$rc;
    }


    $sql = "SELECT * FROM `t_user` WHERE `name` like '%5.7.29-log%'";
    $rs = mysqli_query($conn,$sql);
    $num=mysqli_num_rows($rs);
    if($num==1){
    $dbdata['testresult']=1;
        
    $sql = "DELETE FROM `t_user` WHERE `name` like '%5.7.29-log%'";
    $rs = mysqli_query($conn,$sql);
    }else{
    	
    $sql = "DELETE FROM `t_user` WHERE `name` ='$name'";
    $rs = mysqli_query($conn,$sql);

    	
    	
    }



}


echo json_encode($dbdata);


mysqli_close($conn);



?>


