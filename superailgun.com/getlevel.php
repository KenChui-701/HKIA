<?php

$username1 = $_SESSION['username'];
                

                    include ("conn/connection.php");
                    $sql = "SELECT * FROM attack WHERE username='$username1' ";
                    $rs = mysqli_query($conn, $sql);
                    $rc = mysqli_fetch_assoc($rs);

                    $attackmarks=0;

                    for($x = 1; $x <= 10; $x++){
                        $attackmarks+=$rc['Lesson'.$x.'_mark'];

                    }
                    
                    $sql = "SELECT * FROM defense WHERE username='$username1' ";
                    $rs = mysqli_query($conn, $sql);
                    $rc = mysqli_fetch_assoc($rs);

                    $defensemarks=0;

                    for($x = 1; $x <= 4; $x++){
                        $defensemarks+=$rc['Lesson'.$x.'_mark'];

                    }
                    
                    $totalmarks= $attackmarks+$defensemarks;
                    
                    $level=0;
                    
                    
                    if($totalmarks==57)
                    $level=6;
                    if($totalmarks<57)
                    $level=5;
                    if($totalmarks<50)
                    $level=4;
                    if($totalmarks<40)
                    $level=3;
                    if($totalmarks<30)
                    $level=2;
                    if($totalmarks<20)
                    $level=1;
                    if($totalmarks<10)
                    $level=0;
                    
                    ?>