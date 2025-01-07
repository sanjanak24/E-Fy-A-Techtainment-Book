<?php
session_start();

//include("php/config.php");
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
     <link rel="stylesheet" href="styles/staffHome.css">
     <title>Home</title>
</head>

<body>
     <?php

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);

     $id = $_SESSION['id'];
     $query = mysqli_query($con, "SELECT * FROM  staff");

     while ($result = mysqli_fetch_assoc($query)) {
          $a = $result['name'];
          $b= $result['email'];
		  $c= $result['contact'];
          $res_id = $result['id']; 
     }
	 
	 
	 
	 
     ?>


     <header>
          <div class="nav">
               <li>
                    <a href="staffHome.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Profile</a>
               </li>
               <li><a href="staffEvent.php">Events</a></li>
               <li><a href="staffParticipants.php">Participants</a></li>
               <li><a href="staffCoordinators.php">Coordinators</a></li>
               <li><a href="staffRounds.php">Rounds</a></li>
               <li><a href="staffRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          <div class="profile-header">
               <div class="header">
                    <h1><?php echo $a ?></h1>
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
                              <input type="text" name="Uname" id="Uname" value="<?php echo $a ?>" readonly />
                         </div>
                         <div>
                              <div class="pname">
                                   <label for="usn">Email:</label>
                              </div>

                              <input type="text" name="email" id="emaill"  value="<?php echo $b ?>" readonly />
                         </div>
                         <div>
                              <div class="pname">
                                   <label for="Uname">Mobile No.:</label>
                              </div>
                              <input type="text" name="contact" id="Uname" placeholder="8197696941" value="<?php echo $c ?>" readonly />
                         </div>
                         <div>
						 
                         </div>
						 
                    </div>
               </div>
          </div>
		</div>  
</body>

</html>