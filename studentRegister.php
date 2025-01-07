<?php

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);
    
    
    // When form submitted, insert values into the database.
    if (isset($_POST['save'])) {
        // removes backslashes
        $fname = $_POST['name'];
        $usn    = $_POST['usn'];
        $email = $_POST['email'];
        $collegename = $_POST['Collegename'];
        $contactnumber = $_POST['contact'];        
        $password = $_POST['password'];
        $transaction_id = $_POST['transaction_id'];
        $event = $_POST['amt'];
		$event_list = $_POST['value'];
		
        $accomendation = $_POST['yes'];	
        $in = $_POST['in'];

     //    if (!preg_match('/^\d{10}$/', $contactnumber)) {
     //      $errors[] = "Invalid contact number. It should be 10 digits.";
     //  }
        		
     //    $fname = $_POST['name'];

     //    if (preg_match('/^[a-zA-Z\s\-]+$/', $fname)) {
     //        // Name is valid
     //        $stmt = $pdo->prepare("INSERT INTO  (name, phone_number) VALUES (?, ?)");
     //        $stmt->execute([$name, $_POST['phone_number']]);
     //    } else {
     //        // Name is invalid
     //        echo "Invalid name";
     //    }
        
	  
					$verify_query = mysqli_query($con, "SELECT email FROM eregisteration WHERE email='$email'");

					if (mysqli_num_rows($verify_query) != 0) {
						//echo '<script type="text/javascript">'; 
						//echo 'alert("The username you entered already exist please try with another username");'; 
						//echo 'window.location.href = "studentRegister.php";';
						//echo '</script>'; 
					$error = "The username you entered already exist please try with another username !";						

					}
					else{
						$query1    = "INSERT into eregisteration(name,email,contact,password)
						VALUES ('$fname','$email','$contactnumber','$password')";
						mysqli_query($con, $query1);
						$id = mysqli_insert_id($con);
	  
						for ($i=0;$i<sizeof ($event_list);$i++) {
						$b=0;$b=$b+1;
						$a=0;						
						$query2    = "INSERT into events(fkid,ename,eid,evt)
						VALUES ('$id','$event_list[$i]','$a','$b')";
						mysqli_query($con, $query2);
	 
					}
						$query    = "INSERT into tudent_register(s_name,usn,email,c_name,c_number,s_password,s_event,t_id,accomendation,fkid)
						VALUES ('$fname','$usn','$email','$collegename','$contactnumber','$in','$event','$transaction_id','$accomendation','$id')";
        
						//print_r($query);
	   
	   
						$result   = mysqli_query($con, $query);
	 
						// print_r($result);
					if($result==1) {
						//echo '<script type="text/javascript">'; 
						//echo 'alert("You Have been registered Successfully Please Login");'; 
						//echo 'window.location.href = "studentLogin.php";';
						//echo '</script>'; 
						$error = "You Have been Registered Successfully !";
                              
			//$code = 4;

						
					} 
					else {
						//echo '<script type="text/javascript">'; 
						//echo 'alert("Please try again something went Wrong");'; 
						//echo 'window.location.href = "studentRegister.php";';
						//echo '</script>'; 
                     $error = "Please try again something went wrong !";						
					}
	 
			}
	}

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Student Register</title>
     <link rel="stylesheet" href="styles/studentRegister.css" />
</head>

<body>
     <div class="container">
          <form action="studentRegister.php" method="post">
	<?php
if(isset($error))
{
 ?>
    <span style="color:red;margin-left:30%;font-size:16px;"><?php echo $error; ?></span>
    <?php
}
?>	  
               <h2>SIGN UP</h2>
			  
			 <h2><a href="studentRegister.php" style="font-size:20px;text-decoration:none;color:black;">In house</a> | <a href="studentRegister1.php" style="font-size:20px;text-decoration:none;color:black;">Out house</a></h2>

               <h1 style="color:red;margin-left:2%;">In House</h1>

			  


			  <div class="info">
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name"  value="<?php echo $_GET['name']; ?>"><br>
                    <?php } else { ?>
                    <input type="text" name="name" placeholder="Name"><br>
                    <?php } ?>
					
					<input type="text" name="usn" placeholder="USN"><br>

                    <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                    <input type="email" name="email" placeholder="E-mail"><br>
                    <?php } ?>
                    <input type="tel" name="contact" placeholder="Contact No" maxlength="10" pattern="^\d{10}$"><br>

                    <input type="text" name="Collegename" placeholder="College Name"><br>

                    <input type="password" name="password" placeholder="Password"><br>

                    <input type="password" name="re_password" placeholder="Re_Password"><br>
					<input type="text" name="transaction_id" placeholder="Transaction Id" required /><br>

					
					<input type="hidden" name="in" placeholder="inhouse" value="in" required />
               </div>

               <div class="pay-for">
                    <div class="col-1-1">
                         <label>Events</label>
                         <div class="checkbox" onclick="getSelectedValues()">
                              <div>
                                   <input type="checkbox" id="event1" name="value[]" value="150.00" unchecked />
                                   <label for="event1">Sports,Singing,Dancing</label>
                              </div>
                              <div>
                                   <input type="checkbox" id="event2" name="value[]" value="150.01" unchecked />
                                   <label for="event2">Quiz,Debate</label>
                              </div>
                              <div>
                                   <input type="checkbox" id="event3" name="value[]" value="150.02" unchecked />
                                   <label for="event3">Paper Presentation</label>
                              </div>
                              <div>
                                   <input type="checkbox" id="event4" name="value[]" value="150.03" unchecked />
                                   <label for="event4">Mock Id</label>
                              </div>
                              <div>
                                   <input type="checkbox" id="event5" name="value[]" value="150.04" unchecked />
                                   <label for="event5">Hackthon</label>
                              </div>
                         </div>
                    </div>
                    <div class="qr-pic">
                         <img src="styles/img/qr1.png" alt="" />
                         <p>Total Amount: Rs.<input type="text" name="amt" id="t6" placeholder="0"
                                   onblur="getSelectedValues()" readonly></p>
                    </div>
                    <br>


                    <div class="yes-no">
                         <p>Accommodation:</p>
                         <p class="accommodate" id="accommodate"><input type="text" name="yes" value="yes"></p>

                    </div>
		</div><br>


               
               <div class="form_btn">
                    <button type="submit" name="save">Sign Up</button>
               </div>
               <a href="studentLogin.php" class="ca">Already have an account?</a>

          </form>
		  </div>
                    <script src="scripts/studentRegister.js"></script>
</body>

</html>