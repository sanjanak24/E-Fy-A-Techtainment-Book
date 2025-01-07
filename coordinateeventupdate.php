<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
}

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles/coordinatorPostEvent.css" />
     <title>Home</title>
</head>
  <header>
         <div class="nav">
               <li>
                    <a href="coordinatorHome.php">Profile</a>
               </li>
               <li><a href="coordinatorEvent.php">Events</a></li>
               <li><a href="coordinatorParticipants.php">Participants</a></li>
               <li><a href="coordinatorPost.php">Post Event</a></li>
               <li><a href="eventrounds.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Rounds</a>
               </li>
               <li><a href="coordinatorRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>

<body> 

<div class="container">
          <div class="event-header">
               <h3>Update Event</h3>
          </div>
<div class="post-form">
               <form method="post" action="t4.php">
			   
			     <?php
			
	
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$res=mysqli_query($con,"select * from epost  where id=$id");
	
					while($data=mysqli_fetch_array($res))
					{
					
				?>
			   <input type="hidden" name="t1" height="20px" width="20px" value='<?php echo $data['id']; ?>'>

                    <div class="label-input">Event Name:<input type="text" name="t2" id="event-name"
                              placeholder="Event Name" value='<?php echo $data['ename']; ?>'>
                    </div>
                    <div class="label-input">Coordinator Name:<input type="text" name="t3"
                              id="Coordinator-name" placeholder="Coordinator Name" value='<?php echo $data['cname']; ?>'>
                    </div>
                    <div class="label-input">Description:<input type="text" placeholder="Event Description"
                              name="t4" id="event-Description" rows="5" cols="5" value='<?php echo $data['desc1']; ?>'>
                    </div>
                    <div class=" label-input">Event Date:<input type="date" name="t5" id="event-Date"
                              placeholder="Event Date" value='<?php echo $data['date']; ?>'></div>
                    <div class=" label-input">Event Time:<input type="time" name="t6" id="event-time"
                              placeholder="Event time" value='<?php echo $data['time']; ?>'></div>
                    <div class="label-input">Event Venue:<input type="text" name="t7" id="event-Venue"
                              placeholder="Event Venue" value='<?php echo $data['venue']; ?>'></div>
                    <div class="field">
                         <input type="submit" class="btn" name="update1" value="Post" required>
                    </div>
					<?php
}
}
?>
               </form>
          </div>
		</div>  
		  </body>

</html>