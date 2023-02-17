
<?php




$num = $_POST["pwd"];



include("../../../conn/connection4test.php");
$sql = "SELECT price FROM stock WHERE stockid = $num";

$dbdata = array();
$dbdata['testresult']=0;

if (mysqli_multi_query($conn, $sql)) {
    do {
        if ($result = mysqli_store_result($conn)) {


            while ($row = mysqli_fetch_row($result)) {


                $ans = '/www/server/data/';
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





mysqli_close($conn);



?>


