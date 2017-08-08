<?php
include "db.php";
//include "home.php";
session_start();
$usid=$_SESSION['user'];
$user_l=$_SESSION['fuser'];
     $sql_msg1="select sendid,message,date from message where sendid='$user_l' and recid='$usid' or sendid='$usid' and recid='$user_l';";
                $result_msg1=mysqli_query($db,$sql_msg1);
                if($result_msg1->num_rows>0)
                {
                    while($row_msg1=mysqli_fetch_assoc($result_msg1))
                    {
                        $id=$row_msg1["sendid"];
                        $msg1=$row_msg1["message"];
                        $date1=$row_msg1["date"];
                        if($id==$usid)
                        {
                            echo "<div class='bubble me'>
                                            $msg1
                                        </div>";
                        }
                        else
                            echo "<div class='bubble you'>
                                        $msg1
                                    </div>";

                    }
                }
?>