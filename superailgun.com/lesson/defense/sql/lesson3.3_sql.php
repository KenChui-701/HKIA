
<?php


$id = $_POST["id"]; // get user input which name is "id"
$password = $_POST["pwd"]; // get user input which name is "pwd"





include("../../../conn/connection4test.php");

$sql = "DELETE FROM t_user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();


$dbdata = array();
if($stmt->affected_rows>0){
$dbdata['testresult']=1;
$dbdata['table'][]="ID = ".$id." account deleted";
}else{
$dbdata['testresult']=1;
$dbdata['table'][]="ID = ".$id." No account deleted";
}




$stmt->close();


echo json_encode($dbdata);


mysqli_close($conn);



?>


