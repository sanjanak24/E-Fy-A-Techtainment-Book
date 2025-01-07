<?php
session_start();
//include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);

               //include("php/config.php");
               if (isset($_POST['save'])) {
                    $ename = $_POST['ename'];
                    $cname = $_POST['cname'];
                    $desc = $_POST['desc'];
                    $date = $_POST['edate'];
                    $time = $_POST['etime'];
                    $venue = $_POST['evenue'];
                     $id = $_SESSION['id'];
                
    $query1    = "INSERT into epost(ename,cname,desc1,time,date,venue,sid)
						VALUES ('$ename','$cname','$desc','$time','$date','$venue','$id')";
					$x=mysqli_query($con, $query1);
					if($x==1){
						
						echo"submited";
					}
                

                    }

              

                    ?>
