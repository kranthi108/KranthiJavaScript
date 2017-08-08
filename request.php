<html>
<title>
	Request | NITC Educenter
</title>
<head>
	<?php 
	session_start();
	
	if($_SESSION['user']==NULL)
	{
header('Location: login.php');
}
?>
	</head>
<?php
include "db.php";
$pid=$_GET["pid"];
$username=$_GET["id"];
$rq=$_GET["rq"];
if($rq=='requested')
{
$sql="insert into request (pid,runame,status) values ('$pid','$username','requested');";
if($res=mysqli_query($db,$sql)){
    echo "Request SENT SUCCESSFULLY";
    header('Location: index.php');
    #echo "<a href='javascript:close_window();'>close</a>";
    #echo "<script type='text/javascript'>window.close();</script>"; 
#echo "<a href='javascript:window.open('','_self').close();'>close</a>";
}
else{
	header('Location: index.php');
    echo "Request NOT SENT";
}
}
else if($rq=='cancel')
{
	$sql_c="delete from request where pid='$pid' and runame='$username'";
	if($res_c=mysqli_query($db,$sql_c)){
    echo "Request Cancelled";
    header('Location: index.php');
    #echo "<a href='javascript:close_window();'>close</a>";
    #echo "<script type='text/javascript'>window.close();</script>"; 
#echo "<a href='javascript:window.open('','_self').close();'>close</a>";
}
else{
    echo "Request Cancellation failed!!";
    header('Location: index.php');
}
}

?>