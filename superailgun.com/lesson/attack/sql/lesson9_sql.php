
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

                $dbdata['table'][]=$row[0];

            }
            mysqli_free_result($result);
        }



    } while (mysqli_next_result($conn));
}

$sql = "SELECT table_name FROM information_schema.tables where TABLE_NAME = 'test';";
$rs = mysqli_query($conn,$sql);
$num=mysqli_affected_rows($conn);
if($num==0){
    $dbdata['testresult']=1;
}

$sql = "create table test(
    dataid char(10) not null,
    constraint Record_pk primary key (dataid));";
$rs = mysqli_query($conn,$sql);




echo json_encode($dbdata);





mysqli_close($conn);



?>


