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
$res = mysqli_query($con, "SELECT * FROM events,tudent_register where events.fkid=tudent_register.fkid and events.ename=150.01");


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
     <link rel="stylesheet" href="styles/staffParticipants.css" />
     <title>Home</title>
</head>

<body>
     <header>
          <div class="nav">
               <li>
                    <a href="coordinatorHome.php">Profile</a>
               </li>
               <li><a href="coordinatorEvent.php">Events</a></li>
               <li><a href="coordinatorParticipants.php"
                         style="background: rgba(76, 68, 182, 0.808); color: #fff">Participants</a></li>
               <li><a href="coordinatorPost.php">Post Event</a></li>
               <li><a href="coordinatorRounds.php">Rounds</a></li>
               <li><a href="coordinatorRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
      <div class="container">
	 
	   
         
		
          <div class="Coordinators">
                
                   <h1>Cordinators</h1>
                      
						 <table border="2" width="100%" style="background-color:#e4e9f7;">
		<tr>
			<th>Name</th>
			<th>USN</th>
			<th>College Name</th>
			  <th> Event Participated</th>
			  <th>Participants Type</th>
                
		</tr>
		
<?php
		while($data=mysqli_fetch_array($res))
		{
			?>
			<tr>
			
			<td><?php echo $data["s_name"];?></td>
			<td><?php echo $data["usn"];?></td>
			<td><?php echo $data["c_name"];?></td>
			<td><?php 
						  if($data["ename"]==150.01 || $data["ename"]==300.01){
							 echo "event2";
						 }?> </td>
			<td><?php 
						 if($data["s_password"]=="in"){
							   echo "Inhouse";
						}else{
							 echo "Out House";
						}?> </td>	
               				   
			
		    
		   </tr>
<?php		   
		   
		}
		
?>
</table>

                    </div>
               </div></body>

</html>