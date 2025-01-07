<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles/coordinatorRounds.css" />
     <title>Home</title>
</head>

<body>
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
                              <th>Event Round</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td>John Doe</td>
                              <td>123-456-7890</td>
                              <td>Example College</td>
                              <td>john@example.com</td>
                              <td>USN123456</td>
                              <td>1st</td>
                              <td><button onclick="nextRound(this)">Next Round</button>
                                   <button onclick="disqualifiedRound(this)">Disqualified</button>
                              </td>
                         </tr>
                         <!-- Add more rows as needed -->
                    </tbody>
               </table>
          </div>
     </div>
     <script src="scripts/nextRound.js"></script>
</body>

</html>