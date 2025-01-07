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
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles/coordinatorPaticipants.css" />
     <title>Home</title>
</head>

<body>
     <header>
          <div class="nav">
               <li>
                    <a href="coordinatorHome.php">Profile</a>
               </li>
               <li><a href="coordinatorEvent.php">Events</a></li>
               <li><a href="coordinatorParticipants.php" style="background: rgba(76, 68, 182, 0.808); color: #fff">Participants</a></li>
               <li><a href="coordinatorPost.php">Post Event</a></li>
               <li><a href="eventrounds.php" >Rounds</a>
               </li>
               <li><a href="coordinatorRules.php">Rules and Regulations</a></li>
               <li><a href="php/logout.php">Logout</a></li>
          </div>
     </header>
     <div class="container">
          <div class="participants-header">
               <h3>Participants Details </h3>
          </div>
          <div class="participants-list">
                              <div class="participants-names">
                    <div class="participants-Details">
                        <h1><a href="event1.php" style="text-decoration:none;">Event-one</a></h1>
                    </div>

               </div>
               <div class="participants-names">
                    <div class="participants-Details">
                          <h1><a href="event2.php" style="text-decoration:none;">Event-Two</a></h1>
                    </div>

               </div>
               <div class="participants-names">
                    <div class="participants-Details">
                          <h1><a href="event3.php" style="text-decoration:none;">Event-three</a></h1>
                    </div>

               </div>
               <div class="participants-names">
                    <div class="participants-Details">
                         <h1><a href="event4.php" style="text-decoration:none;">Event-four</a></h1>
                    </div>

               </div>
               <div class="participants-names">
                    <div class="participants-Details">
                          <h1><a href="event5.php" style="text-decoration:none;">Event-Five</a></h1>
                    </div>

               </div>
                  
                
            </div>        
              
          </div>
</body>

</html>