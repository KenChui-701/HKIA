
<?php


$id = $_POST["id"]; // get user input which name is "id"
$password = $_POST["pwd"]; // get user input which name is "pwd"




include("../../../conn/connection4test.php");

$sql = "UPDATE t_user SET password = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $password, $id);

$stmt->execute();


$dbdata = array();


if($stmt->affected_rows>0){
$dbdata['testresult']=1;
$dbdata['table'][]=" Row updated.";
$dbdata['table'][]="id: ".$id;
$dbdata['table'][]="password: ".$password;
}else{
$dbdata['testresult']=0;
}



$stmt->close();


echo json_encode($dbdata);


mysqli_close($conn);



?>


