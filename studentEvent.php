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
     <link rel="stylesheet" href="styles/studentEvents.css" />
     <title>Home</title>
</head>

<body>
     <header>
          <div class="nav">
               <li>
                    <a href="studentHome.php">Profile</a>
               </li>
               <li>
                    <a href="studentEvent.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Events</a>
               </li>
               <li><a href="studentRounds.php">Rounds</a></li>
               <li><a href="studentRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          
          <div class="posted-events">
               <div class="event-header">
                 <marquee><h3 style="font-size:25px;">Event Notification Updates Please Do check Here</h3></marquee>
               </div>
			    <?php
		while($data=mysqli_fetch_array($res))
		{
			?>
               <div class="posts">
                    <div class="event-name">
                         <p><?php echo $data["ename"];?></p>
                    </div>
                    <div class="coordinator-name">
                         <p>Coordinator Name:<?php echo $data["cname"];?></p>
                    </div>
                    <div class="event-description">
                         <p>Description:</p>
                         <p class="p">
                              <?php echo $data["desc1"];?>
                         </p>
                    </div>
                    <div class="event-venue-details">
                         <div class="event-date">
                              <p>Event Time: <?php echo $data["date"];?>  <?php echo $data["time"];?></p>
                         </div>
                         <div class="event-venue">
                              <p>Event Venue: <?php echo $data["venue"];?></p>
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