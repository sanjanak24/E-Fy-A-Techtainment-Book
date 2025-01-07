<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);





if(isset($_POST['update1']))
{
//image insereting starts//
//inserting image//
$id=$_POST["t1"];
$a = $_POST["t2"];
$b = $_POST["t3"];
$c = $_POST["t4"];
$d = $_POST["t5"];
$e = $_POST["t6"];
$f = $_POST["t7"];
$del=$_GET['id'];

   
	$sql = 	
$res=mysqli_query($con,"UPDATE  epost  SET ename='$a',cname='$b',desc1='$c',time='$e',date='$d',venue='$f' WHERE id=$id");
if($res==1){
		echo '<script type="text/javascript">'; 
		echo 'alert("Updated successfully");'; 
		echo 'window.location.href = "coordinatorPost.php";';
		echo '</script>';		
	 
	 	}else{
		echo '<script type="text/javascript">'; 
		echo 'alert("not updated");'; 
		echo 'window.location.href = "coordinatorPost.php";';
		echo '</script>';	
	}


	

}

$del=$_GET['id'];
$res=mysqli_query($con,"delete from epost where id=$del");

        echo '<script type="text/javascript">'; 
		echo 'alert("Deleted successfully");'; 
		echo 'window.location.href = "coordinatorPost.php";';
		echo '</script>';



?>
