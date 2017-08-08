<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>MESSAGES | NITC EDU-CENNTER </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel='stylesheet' href='csss_c/reset.css'>
    <link rel='stylesheet' type='text/css' href='message.css'>
    
        <link rel='stylesheet' href='csss_c/style.css'>
        <script type='text/javascript' src='jquery-2.1.4.min.js'></script>

    <?php
        session_start();
    ?>
    <script >
    
$(document).ready(function(){
$('#send').click(function(){

    var mssg= $('#msg').val();
    var sender = $('#uname').val();
    var rec = $('#funame').val();
    if($.trim(mssg) != '')
    {
        //alert(mssg);
        $.ajax({
            url:'insertmsg.php',
            method:'POST',
            data:{msg:mssg,uname:sender,funame:rec},
            
            success:function(data){
                 $('#msg').val('');
//$('#mtime').val('');
                // $('#sname').val();
                 //$('#rname').val();

            }

        });

    }
});
setInterval(function(){
    $('#message').load('fetch.php').fadeIn('slow');

},1000);
});

</script>

  </head>

  <body>
<?php 
                                   $servername = "athena.nitc.ac.in";
                                  $username = "b130417cs";
                                  $password = "b130417cs";
                                  $dbname = "db_b130417cs";


                                  // Create connection
                                  $conn = mysqli_connect($servername, $username, $password, $dbname);

                                  // Check connection
                                  if (!$conn) 
                                  {
                                      die('Connection failed: ' . mysqli_connect_error());
                                  }

                                  	if($_SESSION["user"]==NULL)
                                  	{
                                  		header('Location: login.php');
                                  	}

   echo "<div class='wrapper'>
    <div class='container'>
        <div class='left'>
            <div class='top'>
                <form action='chat.php' method='post' class='form-inline'>
                <input type='text' name='search' placeholder='Enter name to search' required>
                <button type='submit'  class='button button5' name='option' value='Search'>&nbsp Search</button></form>
            </div>
            <ul class='people'>";
            $usid=$_SESSION["user"];
            $option=$_POST["option"];

            if($option!='')
            {
                $search=$_POST["search"];
                $sql="SELECT DISTINCT uname,fname,lname,img FROM user where fname like '%$search%' or lname like '%$search%' or uname like '%$search%' limit 7";
            }
            else
            {
           $sql = "SELECT distinct uname,fname,lname,img FROM user where uname IN((Select sendid from message where recid='$usid' order by date asc)) or uname IN((Select recid from message where sendid='$usid' order by date asc));";
           }
            $result = mysqli_query($conn,$sql);
            if($result->num_rows>0)
            {
                $i=0;
                while($row=mysqli_fetch_assoc($result))
                {

                    $fname=$row["fname"];
                    $uname=$row["uname"];
                    $user_list[$i]=$uname;
                    $img=$row["img"];
                    $i++;
                    $sql_fm="SELECT message , date,mid from message where sendid='$usid' and recid='$uname' or sendid='$uname' and recid='$usid' order by mid desc limit 1; ";
                    $result_fm=mysqli_query($conn,$sql_fm);
                    while($row_fm=mysqli_fetch_assoc($result_fm))
                    {
                        $fm=$row_fm["message"];
                        $date_fm=$row_fm["date"];
                    }
               echo  "<a href='chat_check.php?fname=$uname'><li class='person' data-chat='$uname'>
                    <img src='$img' alt='' />
                    <span class='name'>$fname</span>
                    <span class='time'>$date_fm</span>
                    <span class='preview'>$fm</span>
                </li></a>";
            }
               
           echo "</ul></div>
        
        <div class='right'>
            <div class='top'><span>To: <span class='name'>$fname &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></span><a id='a' href='index.php'>Home</a></div>";

           echo "<div class='chat' data-chat='$user_list[0]'>
                <div class='conversation-start'>
                    <span>$date_fm</span>
                </div>";

               
                #echo $username;
                echo "<div id='mem'>";
                 $_SESSION['fuser']=$user_list[0];
                $username=$_SESSION['user'];
                $funame=$user_list[0];

echo "<div id='message'></div>



</div>";


                echo "<div class='write'>
               <!-- <a href='javascript:;' class='write-link attach'></a>-->
               <!-- <input type='text' placeholder='write Message'/>
                 <a href='javascript:;' class='write-link smiley'></a>-->
                <!-- <a href='javascript:;' class='write-link send'></a>-->
<form method='post' id='msg_form'>
<input name='uname' id='uname' type='hidden'  value='$username'>
<input name='funame' id='funame' type='hidden'  value='$funame'>
<input type='text' name='msg' id='msg' required=''>
<input value='SEND' type='button' id='send' class='write-link send'>
 <!--<button type='submit' class='btn btn-default' name='option' id='send' value='SEND'>&nbsp Send</button>-->
</form>
            </div>";

           echo " </div>";
echo "<div class='chat' data-chat='$user_list[1]'>
                <div class='conversation-start'>
                    <span>$date_fm</span>
                </div>";

               
                #echo $username;
                echo "<div id='mem'>";
                 $_SESSION['fuser']=$user_list[1];
                $username=$_SESSION['user'];
                $funame=$user_list[1];

echo "<div id='message'></div>



</div>";


                echo "<div class='write'>
               <!-- <a href='javascript:;' class='write-link attach'></a>-->
               <!-- <input type='text' placeholder='write Message'/>
                 <a href='javascript:;' class='write-link smiley'></a>-->
                <!-- <a href='javascript:;' class='write-link send'></a>-->
<form method='post' id='msg_form'>
<input name='uname' id='uname' type='hidden'  value='$username'>
<input name='funame' id='funame' type='hidden'  value='$funame'>
<input type='text' name='msg' id='msg' required=''>
<input value='SEND' type='button' id='send' class='write-link send'>
 <!--<button type='submit' class='btn btn-default' name='option' id='send' value='SEND'>&nbsp Send</button>-->
</form>
            </div>";

           echo " </div>";

         # echo "<div class='top'><span>To: <span class='name'>$fname</span></span></div>";

           
           //  echo "<div class='chat' data-chat='$user_list[1]'>
           //      <div class='conversation-start'>
           //          <span>$date_fm</span>
           //      </div>";
           //      $sql_msg_1="select sendid,message,date from message where sendid='$user_list[1]' and recid='$usid' or sendid='$usid' and recid='$user_list[1]' ;";
           //      $result_msg_1=mysqli_query($conn,$sql_msg_1);
           //      if($result_msg_1->num_rows>0)
           //      {
           //          while($row_msg_1=mysqli_fetch_assoc($result_msg_1))
           //          {
           //              $id=$row_msg_1["sendid"];
           //              $msg_1=$row_msg_1["message"];
           //              $date_1=$row_msg_1["date"];
           //              if($id==$usid)
           //              {
           //                  echo "<div class='bubble me'>
           //                                  $msg_1
           //                              </div>";
           //              }
           //              else
           //                  echo "<div class='bubble you'>
           //                              $msg_1
           //                          </div>";

           //          }
           //      }
           //      echo "<div class='write'>
           //      <a href='javascript:;' class='write-link attach'></a>
           //      <input type='text' />
           //      <a href='javascript:;' class='write-link smiley'></a>
           //      <a href='javascript:;' class='write-link send'></a>
           //  </div>";
                
           // echo " </div>";

            echo "<div class='chat' data-chat='$user_list[2]'>
                <div class='conversation-start'>
                    <span>$date_fm</span>
                </div>";

                $_SESSION['fuser']=$user_list[2];
                $username=$_SESSION['user'];
                $funame=$user_list[2];
                #echo $username;
                echo "<div id='mem'>

<div id='message'></div>



</div>";


                echo "<div class='write'>
               <!-- <a href='javascript:;' class='write-link attach'></a>-->
               <!-- <input type='text' placeholder='write Message'/>
                 <a href='javascript:;' class='write-link smiley'></a>-->
                <!-- <a href='javascript:;' class='write-link send'></a>-->
<form method='post' id='msg_form'>
<input name='uname' id='uname' type='hidden'  value='$username'>
<input name='funame' id='funame' type='hidden'  value='$funame'>
<input type='text' name='msg' id='msg' required=''>
<input value='SEND' type='button' id='send' class='write-link send'>
 <!--<button type='submit' class='btn btn-default' name='option' id='send' value='SEND'>&nbsp Send</button>-->
</form>
            </div>";

           echo " </div>";


            echo "<div class='chat' data-chat='$user_list[3]'>
                <div class='conversation-start'>
                    <span>$date_fm</span>
                </div>";
                $sql_msg3="select sendid,message,date from message where sendid='$user_list[3]' and recid='$usid' or sendid='$usid' and recid='$user_list[3]' ;";
                $result_msg3=mysqli_query($conn,$sql_msg3);
                if($result_msg3->num_rows>0)
                {
                    while($row_msg3=mysqli_fetch_assoc($result_msg3))
                    {
                        $id=$row_msg3["sendid"];
                        $msg3=$row_msg3["message"];
                        $date3=$row_msg3["date"];
                        if($id==$usid)
                        {
                            echo "<div class='bubble me'>
                                            $msg3
                                        </div>";
                        }
                        else
                            echo "<div class='bubble you'>
                                        $msg3
                                    </div>";

                    }
                }
                echo "<div class='write'>
                <a href='javascript:;' class='write-link attach'></a>
                <input type='text' />
                <a href='javascript:;' class='write-link smiley'></a>
                <a href='javascript:;' class='write-link send'></a>
            </div>";
                
           echo " </div>";

                        echo "<div class='chat' data-chat='$user_list[4]'>
                <div class='conversation-start'>
                    <span>$date_fm</span>
                </div>";
                $sql_msg4="select sendid,message,date from message where sendid='$user_list[4]' and recid='$usid' or sendid='$usid' and recid='$user_list[4]' ;";
                $result_msg4=mysqli_query($conn,$sql_msg4);
                if($result_msg4->num_rows>0)
                {
                    while($row_msg4=mysqli_fetch_assoc($result_msg4))
                    {
                        $id=$row_msg4["sendid"];
                        $msg4=$row_msg4["message"];
                        $date4=$row_msg4["date"];
                        if($id==$usid)
                        {
                            echo "<div class='bubble me'>
                                            $msg4
                                        </div>";
                        }
                        else
                            echo "<div class='bubble you'>
                                        $msg4
                                    </div>";

                    }
                }
                echo "<div class='write'>
                <a href='javascript:;' class='write-link attach'></a>
                <input type='text' />
                <a href='javascript:;' class='write-link smiley'></a>
                <a href='javascript:;' class='write-link send'></a>
            </div>";
                
           echo " </div>

            
        </div>
    </div>
</div>";
}
else
{
  echo "<center><br><br> No chat History found</center>";
}
echo "<!-- <span class='credits'>design: <a href='https://dribbble.com/Miksa' target='_blank'>milan</a>, code: <a href='http://codepen.io/Momciloo' target='_blank'>momcilo</a></span> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src='js/index.js'></script>";
         ?>

    
    
    
  </body>
</html>
