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
                <form action='chat_check.php' method='post' class='form-inline'>
                <input type='text' name='search' placeholder='Enter name to search' required>
                <button type='submit'  class='button button5' name='option' value='Search'>&nbsp Search</button></form>
            </div>
            <ul class='people'>";
            $usid=$_SESSION["user"];
            $option=$_POST["option"];
            $fiduser=$_GET['fname'];
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
            //if($result->num_rows>0)
            //{
                //$i=0;
                $sql_p="select distinct uname,fname,lname,img from user where uname='$fiduser';";
                $result_p=mysqli_query($conn,$sql_p);
                while($row_p=mysqli_fetch_assoc($result_p))
                {
                  if($fiduser==$row_p['uname'])
                  {

                    $fname_p=$row_p["fname"];
                    //$uname=$row_p["uname"];
                    // if($fiduser==$uname)
                    // {
                    //   $fnname=$fname;
                    // }
                   // $user_list[$i]=$uname;
                    $img=$row_p["img"];
                    //$i++;
                    $sql_fm_p="SELECT message ,date,mid from message where sendid='$usid' and recid='$fiduser' or sendid='$fiduser' and recid='$usid' order by mid desc limit 1; ";
                    $result_fm_p=mysqli_query($conn,$sql_fm_p);
                    while($row_fm_p=mysqli_fetch_assoc($result_fm_p))
                    {
                        $fm_p=$row_fm_p["message"];
                        $date_fm_p=$row_fm_p["date"];
                    }
               echo  "<li class='person' data-chat='$fiduser'>
                    <img src='$img' alt='' />
                    <span class='name'>$fname_p</span>
                    <span class='time'>$date_fm_p</span>
                    <span class='preview'>$fm_p</span>
                </li>";
            }
          }
                while($row=mysqli_fetch_assoc($result))
                {
                  if($fiduser!=$row['uname'])
                  {

                    $fname=$row["fname"];
                    $uname=$row["uname"];
                    // if($fiduser==$uname)
                    // {
                    //   $fnname=$fname;
                    // }
                   // $user_list[$i]=$uname;
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
          }
               
           echo "</ul></div>
        
        <div class='right'>
            <div class='top'><span>To: <span class='name'>$fname_p&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></span><a id='a' href='index.php'>Home</a></div>";

           echo "<div class='chat' data-chat='$fiduser' >
                <div class='conversation-start'>
                    <span>$date_fm_p</span>
                </div>";

               
                #echo $username;
                echo "<div id='mem'>";
                 $_SESSION['fuser']=$_GET['fname'];
                $username=$_SESSION['user'];
                $funame=$_GET['fname'];

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
    echo "</div>
</div>";
//}
echo "<!-- <span class='credits'>design: <a href='https://dribbble.com/Miksa' target='_blank'>milan</a>, code: <a href='http://codepen.io/Momciloo' target='_blank'>momcilo</a></span> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src='js/index.js'></script>";
         ?>

    
    
    
  </body>
</html>
