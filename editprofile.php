<!DOCTYPE html>
<html>
<title>EDUCENTER</title>
<head>
  <?php
// Start the session
session_start();
?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });
   </script>
  
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<!--  <script src='lib/angular/angular.min.js'></script> -->
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
</head>
<body>


  <div>
          <nav class='navbar navbar-inverse navbar-fixed-top' style="background:    #00b0ff;">
            <div class='container-fluid'>
              <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>                        
                </button>
                <a class='navbar-brand' href='#'><img src='photos/logo1.png' alt = 'no image' style='width:50px;height:18px;' ></img></a>
              </div>
              <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav'>
                  <li class='active'><a href='index.php'>Home</a></li>
                  <li><a style="color:black;" href='#'>About</a></li>
                  <li><a style="color:black;" href='projects.php'>Projects</a></li>
                  <li><a style="color:black;" href='#'>Contact</a></li>
                        <form class='navbar-form navbar-left' method="Post" action = "search.php">
                          <div class='form-group'>
                            <input type='text' class='form-control' placeholder='Search' name ='search'>
                          </div>
                          <button type='submit' class='btn btn-default' value='search' name='option'>Submit</button>
                        </form>                  
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                  <?php 
                  if($_SESSION["user"]==NULL){
                    
                  echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span style='background-color:white;'> Sign Up</a></li>
                  <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                } else
                {
                  $user_photo=$_SESSION["user_photo"];

                  #echo "<li><a href='index.php'><span class='glyphicon glyphicon-user'></span>"." ".$_SESSION["user"]."</a></li>";
                 echo "<ul class='nav navbar-nav navbar-right'>";
                  
                    
               #   echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                 # <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                
   echo " <li><img style= 'border-radius:50%;' src='$user_photo' width='48' height='48'>&nbsp</li><li><div class='dropdown'>
  <button  style='padding-top:17px; padding-right:30px;' class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>&nbsp " . $_SESSION["user"]."&nbsp
  <span class='caret'></span></button>
  <ul class='dropdown-menu'>
 <li>  <a href='editprofile.php'>Edit Profile</a></li>
     <li> <a href='myprojects.php'> my projects </a> </li>
     <li> <a href='chat.php'> chat box</a> </li>
     <li class='divider'></ls>
    <li>  <a href='logout.php'>Logout</a> </li>
  </ul>

</div></li></ul>";
 #   <li class="dropdown">
  #  <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Dropdown</a>
   # <div class="dropdown-content" id="myDropdown">
    #  <a href="#">Link 1</a>
     ##<a href="#">Link 3</a>
    #div>
  #</li>

                }

                  ?>
                  
                </ul>
              </div>
            </div>
          </nav>

          <div class='container-fluid text-center'>    
            <div class='row content'>
              <div class='col-sm-2' >
              <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a id="menu-toggle" href="#" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
      </a>
        <a class="navbar-brand" href="home.xhtml">
          logo
        </a>
    </div>
    <div id="sidebar-wrapper" class="sidebar-toggle">
      <ul class="sidebar-nav" style="text-align: left;">
          <li>
              <a href="myprojects.php">My Projects</a>
          </li>
          <li>
              <a href="projects.php">Area of interests</a>
          </li>
          <li>
              <a href="chat.php">chat box</a>
          </li>
          <li>
              <a href="update.php">Update projects</a>
          </li>
        </ul>
    </div>
    </div>
</nav>

              </div>
              <div class='col-sm-8 text-left'> 
                    <br><br>                
                <!-- <table>
                  <thead
                    <tr>
                      <th>Firtst name</th>
                      <th>Last name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> -->

                     <?php

                        

                            $servername = "athena.nitc.ac.in";
                            $username = "b130417cs";
                            $password = "b130417cs";
                            $dbname = "db_b130417cs";
                            $option=$_POST['option'];
                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            // Check connection
                            if (!$conn) 
                            {
                                die('Connection failed: ' . mysqli_connect_error());
                            }
                            
                            if($option=='update')
                         {
                           // echo "submit";
                            $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    //$uname=$_POST['uname'];
    $dob=$_POST['dob'];

    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];

   // $email=$_POST['email'];
    $dept=$_POST['dept'];
    $uname=$_SESSION['user'];
    $location=$user_photo;
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$uname.".".$file_ext);
         #echo "Success";
         $location="uploads/".$uname.".".$file_ext;
      }else{
         //print_r($errors);
      }
   }
   if($password!=$rpassword)
{
  echo "<br><br>Error! Password and Re-enter password not matching";
  echo "<center><table border=1px width=50% style='width: 800px; padding:10px; border: 5px solid gray; margin: 0; background-color: white; box-shadow:15px 15px; border-radius: 25px;' >";
    
                              echo "<h2>Update Profile</h2><br><br>";
                              echo "<form action='editprofile.php' method= 'Post' enctype='multipart/form-data'>
                              <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>First Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='fname' placeholder='First Name'  value='$fname' class='form-control' autofocus required>
                       
                    </div>
                </div>
                <br><br>
  <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>Last Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='lname' placeholder='Last Name'  value='$lname' class='form-control' autofocus required>
                       
                    </div>
                </div>
<br><br>
  <div class='form-group'>
                    <label for='birthDate' class='col-sm-3 control-label'>Date of Birth</label>
                    <div class='col-sm-9'>
                        <input type='date' id='datepicker' name='dob' class='form-control' value='$dob' placeholder='Date Of Birth' required>

                    </div> 
                </div>
             <br><br>
               <div class='form-group'>
                    <label for='country' class='col-sm-3 control-label'>Department</label>
                    <div class='col-sm-9'>
                        <select id='country' name='dept' class='form-control' value='$dept'>
                            <option>computer science</option>
                            <option>Electrical</option>
                            <option>Electronics</option>
                            <option>Mechanical</option>
                            <option>Chemical</option>
                            <option>Civil</option>
                            <option>Production</option>
                            <option>Architecture</option>
                        </select>
                    </div>
                </div>  
                <br><br>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='password' placeholder='Password'  class='form-control' required >
                    </div>
                </div>
                <br><br>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Re-Enter Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='rpassword' placeholder='Re-Enter Password' class='form-control' required>
                    </div>
                </div>

                <br><br>
                <div class='form-group'>
                    <label for='Profile photo' class='col-sm-3 control-label'>Profile Photo</label>
                    <div class='col-sm-9'>
                        <input type='file' id='file_to_upload' name='image' class='form-control' autofocus>
                        <span class='help-block'>Upload Profile Photo</span>
                    </div>
                </div>
                
            
  
  
  
  <button type='submit' class='btn btn-primary' value='update' name='option'>Save</button>
</form><br><br>";

        echo "</table></center><br><br>";

}
        else{     
    
   # $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="update user set fname='$fname',lname='$lname',dob='$dob',dept='$dept',img='$location' where uname='$uname';";
    $result=mysqli_query($conn,$sql);
    if($result)
    #if($conn->exec($sql))
    {
        #echo "Success<br>";
        $_SESSION["user"]=$uname;
        $_SESSION["user_photo"]=$location;
        echo "<br><br><center>Profile Updated Successfully<center>";
    }
    }
  }
    
                           else if($option!='update')
                            {
                              
                              //$pp=$_GET["pid"];
                              #$p=$pp%1000;
                              #echo $pp ,$p;
                            $username=$_SESSION['user'];

                            $sql = "SELECT DISTINCT * FROM user where uname='$username';";
                            $result = mysqli_query($conn,$sql);

                            if ($result->num_rows > 0) {
                            
                              
                              // echo '<tr>'.'<th>name</th>'.'<th>pid</th>'.'<th>field</th>'.'<th>description</th></tr>';
                                while($row = mysqli_fetch_assoc($result))
                                {
                                  $fname=$row['fname'];
                                  $lname=$row['lname'];
                                  $dob=$row['dob'];
                                  $dept=$row['dept'];

                                  $psd=$row["password"];
                                  $user_photo=$_SESSION['user_photo'];

                                }
                                
                                
                              
                              echo "<center><table border=1px width=50% style='width: 800px; padding:10px; border: 5px solid gray; margin: 0; background-color: white; box-shadow:15px 15px; border-radius: 25px;' >";
    
                              echo "<h2>Update Profile</h2><br><br>";
                              echo "<form action='editprofile.php' method= 'Post' enctype='multipart/form-data'>
                              <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>First Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='fname' placeholder='First Name'  value='$fname' class='form-control' autofocus required>
                       
                    </div>
                </div>
                <br><br>
  <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>Last Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='lname' placeholder='Last Name'  value='$lname' class='form-control' autofocus required>
                       
                    </div>
                </div>
<br><br>
  <div class='form-group'>
                    <label for='birthDate' class='col-sm-3 control-label'>Date of Birth</label>
                    <div class='col-sm-9'>
                        <input type='date' id='datepicker' name='dob' class='form-control' value='$dob' placeholder='Date Of Birth' required>

                    </div> 
                </div>
             <br><br>
               <div class='form-group'>
                    <label for='country' class='col-sm-3 control-label'>Department</label>
                    <div class='col-sm-9'>
                        <select id='country' name='dept' class='form-control' value='$dept'>
                            <option>computer science</option>
                            <option>Electrical</option>
                            <option>Electronics</option>
                            <option>Mechanical</option>
                            <option>Chemical</option>
                            <option>Civil</option>
                            <option>Production</option>
                            <option>Architecture</option>
                        </select>
                    </div>
                </div>  
                <br><br>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='password' placeholder='Password' value='$psd' class='form-control' required >
                    </div>
                </div>
                <br><br>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Re-Enter Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='rpassword' placeholder='Re-Enter Password' value='$psd' class='form-control' required>
                    </div>
                </div>

                <br><br>
                <div class='form-group'>
                    <label for='Profile photo' class='col-sm-3 control-label'>Profile Photo</label>
                    <div class='col-sm-9'>
                        <input type='file' id='file_to_upload' name='image' class='form-control' autofocus>
                        <span class='help-block'>Upload Profile Photo</span>
                    </div>
                </div>
                
            
  
  
  
  <button type='submit' class='btn btn-primary' value='update' name='option'>Save</button>
</form><br><br>";

        echo "</table></center><br><br>";

                            }
                            
                            }
                              
                            
                      ?>
<!--                             echo '<tr>'.'<td>'.$row['pid'].'</td>'.'<td>'.$row['name'].'</td>'.'<td>'.$row['field'] .'</td>'.'<td>'.$row['description'].'</td>'.'</tr>';  
 -->                      
                     <!--  <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table> -->  
                <!-- <p></p>
                <hr>
                <h3>Anything</h3>
                <p>Kranthi kiran  </p> -->
              </div>
              
            </div>
          </div>

          <link href='https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css' rel='stylesheet'>
<!--footer start from here-->
                  <footer>
                    <div class='container'>
                      <div class='row'>
                        <div class='col-md-4 col-sm-6 footerleft '>
                          <div class='logofooter'> <img src='photos/logo1.png' alt = 'no image' style='width:150px;height:50px;' ></div>
                          <p> Educenter is an online portal for the students of NITC to interact with alumni and faculty for queries regarding completed projects, ongoing projects and new project ideas Where a student can choose projects to work with the help of faculty and seniors by this process one can get good access to new projects in different areas and helps students grow in that way recommended</p>
                          <p><i class='fa fa-map-pin'></i> #130, pg2 hostel, NITC hostels, Calicut -110085, INDIA</p>
                          <p><i class='fa fa-phone'></i> Phone (India) : +91 7736859989</p>
                          <p><i class='fa fa-envelope'></i> E-mail : educenter@hotmail.com</p>
                          
                        </div>
                        <div class='col-md-2 col-sm-6 paddingtop-bottom'>
                          <h6 class='heading7'>GENERAL LINKS</h6>
                          <ul class='footer-ul'>
                            <li><a href='#'> Career</a></li>
                            <li><a href='#'> Privacy Policy</a></li>
                            <li><a href='#'> Terms & Conditions</a></li>
                            <li><a href='#'> Services</a></li>
                            <li><a href='#'> Ranking</a></li>
                            <li><a href='#'> Case Studies</a></li>
                            <li><a href='#'> Frequently Asked Questions</a></li>
                          </ul>
                        </div>
                        <div class='col-md-3 col-sm-6 paddingtop-bottom'>
                          <h6 class='heading7'>LATEST POST</h6>
                          <div class='post'>
                            <p>latest post one <span>August 3,2016</span></p>
                            <p>latest post two <span>August 3,2016</span></p>
                            <p>latest post threee<span>August 3,2016</span></p>
                          </div>
                        </div>
                        <div class='col-md-3 col-sm-6 paddingtop-bottom'>
                          <div class='fb-page' data-href='https://www.facebook.com/facebook' data-tabs='timeline' data-height='300' data-small-header='false' style='margin-bottom:15px;' data-adapt-container-width='true' data-hide-cover='false' data-show-facepile='true'>
                            <div class='fb-xfbml-parse-ignore'>
                              <blockquote cite='https://www.facebook.com/facebook'><a href='https://www.facebook.com/facebook'>Facebook</a></blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <!--footer start from here-->

                  <div class='copyright'>
                    <div class='container'>
                      <div class='col-md-6'>
                        <p>© 2016 - All Rights with Webenlance</p>
                      </div>
                      <div class='col-md-6'>
                        <ul class='bottom_ul'>
                          <li><a href='#'>webenlance.com</a></li>
                          <li><a href='#'>About us</a></li>
                          <li><a href='#'>Blog</a></li>
                          <li><a href='#'>Faq's</a></li>
                          <li><a href='#'>Contact us</a></li>
                          <li><a href='#'>Site Map</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>