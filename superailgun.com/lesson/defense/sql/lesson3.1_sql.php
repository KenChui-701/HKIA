
<?php


$name = $_POST["id"]; // get user input which name is "id"
$password = $_POST["pwd"]; // get user input which name is "pwd"





include("../../../conn/connection4test.php");

$sql = "INSERT INTO t_user( name, password) VALUES(?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $password);

$stmt->execute();


$dbdata = array();

$dbdata['testresult']=1;


$dbdata['table'][]=" Row inserted.";
$dbdata['table'][]="name: ".$name;
$dbdata['table'][]="password: ".$password;




$stmt->close();


echo json_encode($dbdata);


mysqli_close($conn);



?>


