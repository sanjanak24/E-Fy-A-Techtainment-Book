<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}
 $id = $_SESSION['id'];
	?>


        <?php
			
		$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);

		if(isset($_POST['save'])){
		$id=$_POST['a1'];
		$a=$_POST['a2'];
		
		if($a==0)
{
$a=1;
}
else if($a==1)
{
$a=2;
}
else if($a==2)
{
$a=3;
}
else if($a==3)
{
$a=4;
}
else if($a==4)
{
$a=5;
}
		
		$res=mysqli_query($con,"update events set eid='$a' where id=$id");
		if($res==1){
			header("Location: eventrounds.php");
		}
		}
    



if(isset($_POST['save1'])){
		$id=$_POST['a1'];
		$a=$_POST['a2'];
		
	
 if($a==1)
{
$a=0;
}
else if($a==2)
{
$a=0;
}
else if($a==3)
{
$a=0;
}
else if($a==4)
{
$a=0;
}
else if($a==5)
{
$a=0;
}
else if($a==6)
{
$a=0;
}

	
		
		$res=mysqli_query($con,"update events set eid='$a' where id=$id");
		if($res==1){
			header("Location: eventrounds.php");
		}
		}


?>