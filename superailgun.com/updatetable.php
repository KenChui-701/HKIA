<?php
session_start();
include("conn/connection.php");
extract($_POST);
$username=$_SESSION['username'];



$sql = "UPDATE `$table` SET `$lesson` = true,`".$lesson."_mark` = $mark WHERE`username` = '$username'";
echo$sql;
$rs = mysqli_query($conn,$sql);