
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
     $res = mysqli_query($con, "SELECT * FROM tudent_register,events,eregisteration where tudent_register.id=events.fkid and eregisteration.id='$id'");

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
     <link rel="stylesheet" href="styles/studentRounds.css" />
	  <link rel="stylesheet" href="styles/coordinatorRounds.css" />

     <title>Home</title>
</head>

<body>
     <header>
          <div class="nav">
               <li>
                    <a href="studentHome.php">Profile</a>
               </li>
               <li>
                    <a href="studentEvent.php">Events</a>
               </li>
               <li>
                    <a href="studentRounds.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Rounds</a>
               </li>
               <li><a href="studentRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          <div class="Rounds-header">
               <h3>Rounds</h3>
          </div>
          <div class="rounds-list">
               <div class="round-list-header">Event Name</div>
			   
               <table>
                    <thead>
                         <tr>
                              <th>Name</th>
                              <th>Contact</th>
                              <th>College Name</th>
                              <th>Email</th>
                              <th>USN</th>
							   <th>Event Name</th>
                              <th>Event Round</th>
                              
                         </tr>
                    </thead>
						   <?php
		while($data=mysqli_fetch_array($res))
		{
			?>
                    <tbody>
                         <tr>
                              <td><?php echo $data["s_name"];?></td>
                              <td><?php echo $data["c_number"];?></td>
							  <td><?php echo $data["c_name"];?></td>
                              <td><?php echo $data["email"];?></td>
                              <td><?php echo $data["usn"];?></td>
							   <td><?php  if($data["ename"]==150.00 || $data["ename"]==300.00){
							    echo "Event1";
							   }else if($data["ename"]==150.01 || $data["ename"]==300.01){
						        echo "Event2";
							   }else if($data["ename"]==150.02 || $data["ename"]==300.02){
							   echo "Event3";
							   }
							   else if($data["ename"]==150.03 || $data["ename"]==300.03){
							   echo "Event4";
							   }
							   else if($data["ename"]==150.04 || $data["ename"]==300.04){
							   echo "Event5";
							   }
							   
							   
							   
							   
							   
							   
							   ?></td>
                              <td><?php if($data["eid"]==0){
							 echo "disqualified";
						 }else if($data["eid"]==1){
							 echo"you are qualified for fist round";
						 }
						 else if($data["eid"]==2){
							 echo"selected for 2nd round";
						 }
						 else if($data["eid"]==3){
							 echo"selected for 3rd round";
						 }else if($data["eid"]==4){
							 echo"selected for 4th round";
						 }
						 else if($data["eid"]==5){
							 echo"selected for 5th round";
						 }
						 
						 
						 
						 
						 
						 
						 
						 ?></td>
                            </tr>
                         <!-- Add more rows as needed -->
                    </tbody>
		<?php
		}
		?>
               </table>
          </div>
     </div>

</body>

</html>