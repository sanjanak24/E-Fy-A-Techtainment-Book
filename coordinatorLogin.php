<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/coordinatorLogin.css">
     <title>Login</title>
</head>

<body>
     <div class="container">
          <div class="box form-box">
               <?php

               include("php/config.php");
               if (isset($_POST['submit'])) {
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM coordinator WHERE email='$email' and password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if (is_array($row) && !empty($row)) {
                         $_SESSION['valid'] = $row['email'];
                         $_SESSION['name'] = $row['name'];
                         $_SESSION['id'] = $row['id'];
                    } else {
                         echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                         echo "<a href='coordinatorLogin.php'><button class='btn'>Go Back</button>";

                    }
                    if (isset($_SESSION['valid'])) {
                         header("Location: coordinatorHome.php");
                    }
               } else {


                    ?>
               <form action="" method="post">
                    <header>Coordinator Login</header>
                    <div class="field input">
                         <input type="text" name="email" id="email" placeholder="Username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                         <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"
                              required>
                    </div>

                    <div class="field">

                         <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
               </form>
          </div>
          <?php } ?>
     </div>
</body>

</html>