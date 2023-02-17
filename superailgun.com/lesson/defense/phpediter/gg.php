<?php
$id = 30;
$new=mysqli_real_escape_string($conn, $id);
///$sql4 = "SELECT .... stockid = $new";
$rs = mysqli_query($conn,$sql4);
if($rs){
    $numrow=mysqli_num_rows($rs);
    if($numrow>0){
        while($rc=mysqli_fetch_assoc($rs)){
            extract($rc);
            echo $price;
        }
	}
}
?>
