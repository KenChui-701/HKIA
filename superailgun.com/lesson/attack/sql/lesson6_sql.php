
<?php




$id = $_POST["id"]; // get user input which name is "id"
$pwd = $_POST["pwd"]; // get user input which name is "pwd"




include("../../../conn/connection4test.php");
$sql = "INSERT INTO `newspaper`(`email`,`phone`) VALUES ('$id',$pwd);";
mysqli_query($conn,$sql);

$sql = "SELECT email FROM newspaper WHERE `email` ='$id' and `phone`=$pwd";

$dbdata = array();
$dbdata['testresult']=0;

if (mysqli_multi_query($conn, $sql)) {
    do {
        if ($result = mysqli_store_result($conn)) {


            while ($row = mysqli_fetch_row($result)) {


                $ans = 't_user';
                if($row[0]==$ans){
                    $dbdata['testresult']=1;
                }
                $dbdata['table'][]=$row[0];

            }
            mysqli_free_result($result);
        }



    } while (mysqli_next_result($conn));
}

echo json_encode($dbdata);



$sql = "DELETE FROM `newspaper` WHERE `email` ='$id'";
mysqli_query($conn,$sql);

mysqli_close($conn);



?>


