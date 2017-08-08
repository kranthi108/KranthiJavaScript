<!DOCTYPE html>
<html>
<head>
    <?php
// Start the session
session_start();
?>
    <title>EDUCENTER</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='lib/angular/angular.min.js'></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>

<style>
body {
    background-color: #eee;
}

*[role='form'] {
    max-width: 550px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role='form'] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}

</style>
<script language="javascript" src="calendar.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Format date</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
</head>
<body>
    <?php 
    $servername='athena.nitc.ac.in';
    $username='b130417cs';
    $password='b130417cs';
    $db='db_b130417cs';
    $conn=mysqli_connect($servername,$username,$password,$db);
    if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

  $option=$_POST['option'];
  if($_SESSION["user"]!=NULL)
  {
        echo "Already Registered as ".$_SESSION["user"];
        header('Location: index.php');  
  }
  else if($option=='Register')
  {
    #require_once ('db.php');
    #printf('Sign up');
    /*   
$fname = $lname = $uname = $dob = $password = $email = $dept ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname=test_input($_POST['fname']);
    $lname=test_input($_POST['lname']);
    $uname=test_input($_POST['uname']);
    $dob=test_input($_POST['dob']);
    $password=test_input($_POST['password']);
    $email=test_input($_POST['email']);
    $dept=test_input($_POST['dept']);
}
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



    */
    #move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);            
    #$location=$_FILES["image"]["name"];
if(isset($_FILES['image'])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
/* if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
    else {
        if (!is_writeable('uploads/' . $_FILES['fileToUpload']['name'])) {
   die("Cannot write to destination file");
}
        echo "Sorry, there was an error uploading your file.";
    }
}
$location=$_FILES["fileToUpload"]["name"];
}
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
   # $location=basename($_FILES["fileToUpload"]["name"]);
    #$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="insert into user values('$uname','$password','$fname','$lname','$email','$dob','$dept','$location');";
    $result=mysqli_query($conn,$sql);
    #$conn->exec($sql);
    if($result)
    {
        #echo "Success<br>";
        $_SESSION["user"]=$uname;
        if($uname=='admin')
        {
            header('Location: adminpage.php');
        }
        else{
        header('Location: index.php'); 
        } 
    }
    else
    {
        echo "<center><h3>Error occurred</h3>".mysqli_error($conn);
        #$msg=mysqli_error($conn);
        echo "</center>";
        #echo mysql_errno($conn) . ":" . mysql_error($conn) . "\n";
        echo "<div class='container'>
            <form class='form-horizontal' role='form' method='Post' action = 'sign_up.php'  enctype='multipart/form-data'>
                <h2>&nbsp &nbsp Sign up</h2>
                <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>First Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='fname' placeholder='First Name' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>Last Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='lname' placeholder='Last Name' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='email' class='col-sm-3 control-label'>Email</label>
                    <div class='col-sm-9'>
                        <input type='email' id='email' name='email' placeholder='Email' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='username' class='col-sm-3 control-label'>User name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='username' name='uname' placeholder='Username' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: kranthi108</span>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='password' placeholder='Password' class='form-control' required>
                    </div>
                </div>
               
                     <input type='date' ng-model='mydateOfBirth' class='form-control' id='date_of_birth' name='dob' placeholder='Date of Birth'>Date of Birth-->
                     <div class='form-group'>
                    <label for='birthDate' class='col-sm-3 control-label'>Date of Birth(yyyy-mm-dd)</label>
                    <div class='col-sm-9'>
                        <input type='text' id='datepicker' name='dob' class='form-control' required>

                    </div> 
                </div>
                <!-- <div class='form-group'>
                    <label for='country' class='col-sm-3 control-label'>Department</label>
                    <div class='col-sm-9'>
                        <select id='country' name='dept' class='form-control'>
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
                </div>  -->

                <div class='form-group'>
                    <label for='Profile photo' class='col-sm-3 control-label'>Profile Photo</label>
                    <div class='col-sm-9'>
                        <input type='file' id='fileToUpload' name='fileToUpload' class='form-control' autofocus>
                        <span class='help-block'>Upload Profile Photo</span>
                    </div>
                </div>
                
                <div class='form-group'>
                    <div class='col-sm-9 col-sm-offset-3'>
                        <div class='checkbox'>
                            <label>
                                <input type='checkbox' Required>I accept <a href='#'>terms and conditions</a>
                            </label>
                        </div>
                    </div>
                </div> 
                <div class='form-group'>
                    <div class='col-sm-9 col-sm-offset-3'>
                        <button type='submit' class='btn btn-primary btn-block' value='Register' name='option'>Register</button>
                    </div>
                    <a href='index.php' >&nbsp &nbsp &nbsp &nbsp Go back to home page</a>
                <a style = 'text-align:right;'  href='login.php'  >&nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login if already registered</a>
                </div>

            </form> <!-- /form -->
        </div> <!-- ./container -->";


    }
  }
  else {
    echo "<div class='container'>
            <form class='form-horizontal' role='form' method='Post' action = 'sign_up.php'>
                <h2>&nbsp &nbsp Sign up</h2>
                <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>First Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='fname' placeholder='First Name' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='firstName' class='col-sm-3 control-label'>Last Name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='firstName' name='lname' placeholder='Last Name' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='email' class='col-sm-3 control-label'>Email</label>
                    <div class='col-sm-9'>
                        <input type='email' id='email' name='email' placeholder='Email' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='username' class='col-sm-3 control-label'>User name</label>
                    <div class='col-sm-9'>
                        <input type='text' id='username' name='uname' placeholder='Username' class='form-control' autofocus required>
                        <span class='help-block'>Last Name, First Name, eg.: kranthi108</span>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='password' class='col-sm-3 control-label'>Password</label>
                    <div class='col-sm-9'>
                        <input type='password' id='password' name='password' placeholder='Password' class='form-control' required>
                    </div>
                </div>
               
                    <!-- <input type='date' ng-model='mydateOfBirth' class='form-control' id='date_of_birth' name='dob'>Date of Birth-->
                     <div class='form-group'>
                    <label for='birthDate' class='col-sm-3 control-label'>Date of Birth(yyyy-mm-dd)</label>
                    <div class='col-sm-9'>
                        <input type='text' id='datepicker' name='dob' class='form-control' required>

                    </div> 
                </div>
                <div class='form-group'>
                    <label for='country' class='col-sm-3 control-label'>Department</label>
                    <div class='col-sm-9'>
                        <select id='country' name='dept' class='form-control'>
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
                <div class='form-group'>
                    <label for='Profile photo' class='col-sm-3 control-label'>Profile Photo</label>
                    <div class='col-sm-9'>
                        <input type='file' id='fileToUpload' name='fileToUpload' class='form-control' autofocus>
                        <span class='help-block'>Upload Profile Photo</span>
                    </div>
                </div>
                <!-- <div class='form-group'>
                    <label class='control-label col-sm-3'>Gender</label>
                    <div class='col-sm-6'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' id='femaleRadio' value='Female'>Female
                                </label>
                            </div>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' id='maleRadio' value='Male'>Male
                                </label>
                            </div>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' id='uncknownRadio' value='Unknown'>Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class='form-group'>
                    <label class='control-label col-sm-3'>Meal Preference</label>
                    <div class='col-sm-9'>
                        <div class='checkbox'>
                            <label>
                                <input type='checkbox' id='calorieCheckbox' value='Low calorie'>Low calorie
                            </label>
                        </div>
                        <div class='checkbox'>
                            <label>
                                <input type='checkbox' id='saltCheckbox' value='Low salt'>Low salt
                            </label>
                        </div>
                    </div>
                </div>  -->
                <div class='form-group'>
                    <div class='col-sm-9 col-sm-offset-3'>
                        <div class='checkbox'>
                            <label>
                                <input type='checkbox' Required>I accept <a href='#'>terms and conditions</a>
                            </label>
                        </div>
                    </div>
                </div> 
                <div class='form-group'>
                    <div class='col-sm-9 col-sm-offset-3'>
                        <button type='submit' class='btn btn-primary btn-block' value='Register' name='option'>Register</button>
                    </div>
                    <a href='index.php' >&nbsp &nbsp &nbsp &nbsp Go back to home page</a>
                <a style = 'text-align:right;'  href='login.php'  >&nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login if already registered</a>
                </div>

            </form> <!-- /form -->
        </div> <!-- ./container -->";

  }
    ?>
    </body>
    </html>
