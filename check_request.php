 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<title>EDUCENTER</title>
<head>
  <?php
// Start the session
session_start();
?>
	
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- 	<script src='lib/angular/angular.min.js'></script> -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
 	<script src='js/bootstrap.min.js'></script>
  <script src="js/myfile.js"></script>
  <link rel='stylesheet' href='css_cc/style.css'>
        <script type='text/javascript' src='jquery-2.1.4.min.js'></script>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
    footer { background-color:#0c1a1e; min-height:50px; font-family: 'Open Sans', sans-serif; }
    .footerleft { margin-top:50px; padding:0 36px; }
    .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

    .footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
    .footerleft p i { width:20px; color:#999;}


    .paddingtop-bottom {  margin-top:50px;}
    .footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
    .footer-ul li { line-height:29px; font-size:12px;}
    .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
    .footer-ul i { margin-right:10px;}
    .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

    .social:hover {
         -webkit-transform: scale(1.1);
         -moz-transform: scale(1.1);
         -o-transform: scale(1.1);
     }
     
     

     
     .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
     .icon-ul li { line-height:75px; width:100%; float:left;}
     .icon { float:left; margin-right:5px;}
     
     
     .copyright { min-height:40px; background-color:#000000;}
     .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
     .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
     .post p { font-size:12px; color:#FFF; line-height:20px;}
     .post p span { display:block; color:#8f8f8f;}
     .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
     .bottom_ul li { float:left; line-height:40px;}
     .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
     .bottom_ul li a { color:#FFF;  font-size:12px;}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    table:hover{
      box-shadow:15px 15px; 
      border-radius: 25px;
      width: 1000px; 
      padding:15px;
      background-color: red;
    }
    #sidebar-wrapper {
  top: 52px;
  left: -200px;
  width: 200px;
  background-color: transparent;
  color: black;
  position: fixed;
    height: 100%;
  z-index: 1;
}
.sidebar-nav {
  position: absolute;
  top: 0;
  margin: 0;
  padding: 0;
  width: 200px;
  list-style: none;
}
.sidebar-nav li {
  text-indent: 20px;
  line-height: 50px;
}
.sidebar-nav li a {
  color: black;
  display: block;
  text-decoration: none;
}
.sidebar-nav li a:hover {
  background: #00b0ff;
  color: white;
  text-decoration: none;
}
.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}
#sidebar-wrapper.sidebar-toggle {
  transition: all 0.3s ease-out;
  margin-left: -200px;
}
@media (min-width: 768px) {
  #sidebar-wrapper.sidebar-toggle {
    transition: 0s;
    left: 200px;
  }
}

.but {
  display: inline-block;
  border-radius: 15px;

  background-color: #00b0ff;
  border: none;
  color: #ffff;
  text-align: center;
  font-size: 16px;
  padding: 10px 10px; 
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.but {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.but :after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.but:hover  {
  padding-right: 25px;
}

.but:hover :after {
  opacity: 1;
  right: 0;
}
  </style>
<script >
    
$(document).ready(function(){
$('#request').click(function(){

    var pid= $('#pid').val();
    var rec = $('#fname').val();
    var sender = $('#uname').val();
    
    if($.trim(pid) != '')
    {
        //alert(mssg);
        $.ajax({
            url:'request.php',
            method:'POST',
            data:{pid:pid,uname:sender,fname:rec},
            
            success:function(data){
                 $('#pid').val('');
//$('#mtime').val('');
                // $('#sname').val();
                 //$('#rname').val();

            }

        });

    }
});
});
</script>
								<?php
								$uname=$_SESSION["user"];

			                      $servername = "athena.nitc.ac.in";
			                      $username = "b130417cs";
			                      $password = "b130417cs";
			                      $dbname = "db_b130417cs";

			                      // Create connection
			                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                            $uname=$_SESSION['user'];
			                      // Check connection
			                      if (!$conn) 
			                      {
			                          die('Connection failed: ' . mysqli_connect_error());
			                      }
                            		$j=$_POST['jval'];
                            		$j=$j+5;
			                      $sql = "SELECT * FROM store order by pid desc limit " . $j ;
			                      $result = mysqli_query($conn,$sql);

			                      if ($result->num_rows > 0) {
			           			                                    
                              // echo '<tr>'.'<th>name</th>'.'<th>pid</th>'.'<th>field</th>'.'<th>description</th></tr>';
                                while($row = mysqli_fetch_assoc($result))
                                {
                                  $body=$row["description"]; 

                                  if(strlen($body) > 380) $body = substr($body,0,380) . "....";
                                  $loc=$row["file"];
                                  $pid=$row["pid"];
                                  $sql1="select * from user,project where project.uname=user.uname and pid='$pid'";
                                  $result1=mysqli_query($conn,$sql1);
                                  while($row1=mysqli_fetch_assoc($result1))
                                  {
                                    $photo=$row1["img"];
                                    $fname=$row1["fname"];
                                    $email=$row1["email"];
                                    $lname=$row1["lname"];
                                    #$auth_id=$row["uname"];
                                    #echo $auth_id;
                                   # echo "$photo $fname";
                                  }
                                  $sql2="select * from user where email='$email';";
                                  $result2=mysqli_query($conn,$sql2);
                                  while($row2=mysqli_fetch_assoc($result2))
                                  {
                                    
                                    $fname=$row2["uname"];
                                    #echo $auth_id;
                                   # echo "$photo $fname";
                                  }
                                  echo "<form method='post' id='msg_form'>

<input name='pid' id='pid' type='hidden'  value='$pid'>
<input name='fname' id='fname' type='hidden'  value='$fname'>
<input name='uname' id='uname' type='hidden' value='$uname'>

<input value='Request' type='button' id='request'>
</form>  
$fname & $uname ";
                              }
                              

                          }

?>
</body>
</html>
