<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);

     $id = $_SESSION['id'];
     $res = mysqli_query($con, "SELECT * FROM epost order by id desc");

    // <!--  while ($result = mysqli_fetch_assoc($query)) {
      //    $a = $result['ename'];
        //  $b= $result['cname'];
		  //$c= $result['desc1'];
		  //$d= $result['time'];
		  //$e= $result['venue'];
          //$res_id = $result['id']; 
     //} --> 
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles/staffEvent.css" />
     <title>Home</title>
</head>

<body>
     <header>
          <div class="nav">
               <li>
                    <a href="staffHome.php">Profile</a>
               </li>
               <li><a href="staffEvent.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Events</a></li>
               <li><a href="staffParticipants.php">Participants</a></li>
               <li><a href="staffCoordinators.php">Coordinators</a></li>
               <li><a href="staffRounds.php">Rounds</a></li>
               <li><a href="staffRules.php">Rules and
                         Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          <div class="posted-events">
               <div class="event-header">
         <marquee><h3 style="font-size:20px;">Event Notification Updates Do Check here</h3></marquee>
               </div>
			   	   <?php
		while($data=mysqli_fetch_array($res))
		{
			?>
               <div class="posts">
                    <div class="event-name">
                         <p style="font-size:30px;font-weight:bold;"><?php echo $data["ename"];?></p>
                    </div>
                    <div class="coordinator-name">
                         <p style="font-weight:bold;">Coordinator Name:<?php echo $data["cname"];?></p>
                    </div>
                    <div class="event-description">
                         <p style="font-weight:bold;">Description:</p>
                         <p class="p" style="font-weight:bold;">
                               <?php echo $data["desc1"];?>
                         </p>
                    </div>
                    <div class="event-venue-details">
                         <div class="event-date">
                              <p style="font-weight:bold;"><?php echo $data["time"];?></p>
							  <p style="font-weight:bold;"><?php echo $data["date"];?></p>
                         </div>
                         <div class="event-venue">
                              <p style="font-weight:bold;">Event Venue:<?php echo $data["venue"];?></p>
                         </div>
                    </div>
               </div>
               <?php
			   }
			   ?>
          </div>
     </div>
     <script src="scripts/studentEvents.js"></script>
</body>

</html>