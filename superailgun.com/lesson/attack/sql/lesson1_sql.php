
<?php


$id = $_POST["id"]; // get user input which name is "id"
$pwd = $_POST["pwd"]; // get user input which name is "pwd"





include("../../../conn/connection4test.php");

$sql = "SELECT * FROM users where id = '$id' and pwd = '$pwd'";
$rs= mysqli_query($conn, $sql)or die(mysqli_error($conn));
$dbdata = array();

if(mysqli_num_rows($rs) > 0)
{
    $dbdata['testresult']=1;
    while ($rc = mysqli_fetch_assoc($rs)) {
        $dbdata['table'][]=$rc;
            }
    echo json_encode($dbdata);
}
else
{
    $dbdata['testresult']=0;
    echo json_encode($dbdata);
}
mysqli_close($conn);



?>


