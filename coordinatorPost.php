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
     <link rel="stylesheet" href="styles/coordinatorPostEvent.css" />
     <title>Home</title>
</head>
<script>
function checkdelete(){
return confirm('are you sure you want to delete this record');
}
</script>

<body>
     <header>
         <div class="nav">
               <li>
                    <a href="coordinatorHome.php">Profile</a>
               </li>
               <li><a href="coordinatorEvent.php">Events</a></li>
               <li><a href="coordinatorParticipants.php">Participants</a></li>
               <li><a href="coordinatorPost.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Post Event</a></li>
               <li><a href="eventrounds.php" >Rounds</a>
               </li>
               <li><a href="coordinatorRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          <div class="event-header">
               <h3>Post Event</h3>
          </div>
          <div class="post-form">
               <form method="post" action="t3.php">
                    <div class="label-input">Event Name:<input type="text" name="ename" id="event-name"
                              placeholder="Event Name">
                    </div>
                    <div class="label-input">Coordinator Name:<input type="text" name="cname"
                              id="Coordinator-name" placeholder="Coordinator Name">
                    </div>
                    <div class="label-input">Description:<textarea placeholder="Event Description"
                              name="desc" id="event-Description" rows="5" cols="5"></textarea>
                    </div>
                    <div class=" label-input">Event Date:<input type="date" name="edate" id="event-Date"
                              placeholder="Event Date"></div>
                    <div class=" label-input">Event Time:<input type="time" name="etime" id="event-time"
                              placeholder="Event time"></div>
                    <div class="label-input">Event Venue:<input type="text" name="evenue" id="event-Venue"
                              placeholder="Event Venue"></div>
                    <div class="field">
                         <input type="submit" class="btn" name="save" value="Post" required>
                    </div>
               </form>
          </div>
          <div class="event-header">
               <h3>Event Posted</h3>
          </div>
		  <?php
		while($data=mysqli_fetch_array($res))
		{
			?>
		  
		  
          <div class="posted-events">
               <div class="posts">
                    <div class="field">
     
<?php echo"<a href='coordinateeventupdate.php?id=". $data['id'] ."'><input type='submit'  value='Update Post' id='' class='btn'></a>"?>	 
                        
<?php echo"<a href='t4.php?id=". $data['id'] ."' onclick=' return checkdelete()'><input type='submit' value='Delete Post' class='btn'></a>"?>

                    </div>
					
                    <div class="event-name">
                         <p><?php echo $data["ename"];?></p>
                    </div>
                    <div class="coordinator-name">
                         <p>Coordinator Name: <?php echo $data["cname"];?></p>
                    </div>
                    <div class="event-description">
                         <p>Description:</p>
                         <p class="p">
                             <?php echo $data["desc1"];?>
                         </p>
                    </div>
                    <div class="event-venue-details">
                         <div class="event-date">
                              <p>Event Time: <?php echo $data["time"];?></p>
                         </div>
                         <div class="event-venue">
                              <p>Event Venue: <?php echo $data["venue"];?></p>
                         </div>
                    </div>
               </div>
          </div>
		  <?php
		  }
		  ?>
     </div>
</body>

</html>