<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/staffRegister.css">
     <title>coordinator Register</title>
</head>

<body>
     <div class="container">
          <div class="box form-box">

               <?php

               include("php/config.php");
               if (isset($_POST['submit'])) {
                    $ename = $_POST['ename'];
                    $cname = $_POST['cname'];
                    $desc = $_POST['desc'];
                    $date = $_POST['edate'];
                    $time = $_POST['etime'];
                    $venue = $_POST['evenue'];
                    
                    //verifying the unique email
               
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                    if (mysqli_num_rows($verify_query) != 0) {
                         echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
                         echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {

                         mysqli_query($con, "INSERT INTO users(Name,Email,StudentID,Contact,CollegeName,Password,Eventname,EventAmt,TransactionId) VALUES('$uname','$email','$studentid','$contact','$collegename','$password','$eventname','$eventamt','$transactionid')") or die("Erroe Occured");

                         echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
                         echo "<a href='coordinatorLogin.php'><button class='btn'>Login Now</button>";


                    }

               } else {

                    ?>

               <form action="" method="post">
                    <header>Sign Up</header>

                    <div class="field input">
                         <input type="text" name="uname" id="uname" placeholder="Name" autocomplete="off" required>
                    </div>

                    <div class="field input">
                         <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                         <input type="text" name="student_id" id="student_id" placeholder="Staff Id" autocomplete="off"
                              required>
                    </div>

                    <div class="field input">
                         <input type="tel" name="contact" id="contact" placeholder="Contact" autocomplete="off"
                              maxlength=10 required>
                    </div>

                    <div class="field input">
                         <input type="text" name="college_name" id="college_name" placeholder="College Name"
                              autocomplete="off" required>
                    </div>

                    <div class="field input">
                         <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"
                              required>
                    </div>


                    <div class="field">

                         <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                         Already a member? <a href="coordinatorLogin.php">Sign In</a>
                    </div>
               </form>
          </div>
          <?php } ?>
     </div>
</body>

</html>