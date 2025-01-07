<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/coordinatorHome.css">
     <title>Home</title>
</head>

<body>

     <?php

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);

     $id = $_SESSION['id'];
     $query = mysqli_query($con, "SELECT * FROM coordinator");

     while ($result = mysqli_fetch_assoc($query)) {
          $a1 = $result['name'];
          $a2= $result['usn'];
		  $a3= $result['email'];
		  $a4= $result['contact'];
          $res_id = $result['id']; 
     }
	 
	 
	 
	  //$id = $_SESSION['id'];
             //  $query = mysqli_query($con,"SELECT * FROM tudent_register WHERE fkid=$id");

               //while($result = mysqli_fetch_array($query)) {
                  // $a = $result['name'];
                   //$b = $result['email'];
                  // $c = $result['id'];
				 //  $d=$result['usn'];
				   //$a1=$result['c_number'];
				   //$a2=$result['c_name'];
				   //$a3=$result['accomendation'];
				   //$a4=$result['t_id'];
               //}

     ?>

     <header>
          <div class="nav">
               <li>
                    <a href="coordinatorHome.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Profile</a>
               </li>
               <li><a href="coordinatorEvent.php">Events</a></li>
               <li><a href="coordinatorParticipants.php">Participants</a></li>
               <li><a href="coordinatorPost.php">Post Event</a></li>
               <li><a href="eventrounds.php" >Rounds</a>
               </li>
               <li><a href="coordinatorRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>

     <div class="container">
          <div class="profile-header">
               <div class="header">
                    <h1><?php echo $a1?></h1>
                    <p>Welcome to your Profile Page</p>
               </div>
               <div class="edit">
                    <input type="hidden" value="Edit Profile" />
               </div>
          </div>
          <div class="profile-detail">
               <h3>Personal Information</h3>
               <div class="detail">
                    <div class="detail-col">
                         <div>
                              <div class="pname">
                                   <label for="Uname">Name:</label>
                              </div>
                              <input type="text" name="Uname" id="Uname" value="<?php echo $a1 ?>" readonly />
                         </div>
                         <div>
                              <div class="pname">
                                   <label for="usn">USN:</label>
                              </div>

                              <input type="text" name="usn" id="usn" value="<?php echo $a2 ?>" readonly />
                         </div>
                         
                         <div>
                              <div class="pname">
                                   <label for="Uname">Mobile No.:</label>
                              </div>
                              <input type="text" name="Uname" id="Uname" value="<?php echo $a4 ?>" readonly />
                         </div>
                         <div>
                              <div class="pname">
                                   <label for="email">E-mail:</label>
                              </div>
                              <input type="text" name="email" id="email" value="<?php echo $a3 ?>" readonly />
                         </div>
                         <div>
                         </div>
                    </div>
               </div>
          </div>
</body>

</html>