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
          <form action="t1.php" method="post">
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
                    <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                    <?php } else { ?>
                    <input type="text" name="name" placeholder="Name"><br>
                    <?php } ?>
					
					<input type="text" name="usn" placeholder="USN"><br>

                    <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                    <input type="email" name="email" placeholder="E-mail"><br>
                    <?php } ?>
                    <input type="tel" name="contact" placeholder="Contact No" maxlength="10"><br>

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
                         <img src="styles/img/qrcode.png" alt="" />
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
                    <script src="scripts/testscript.js"></script>
</body>

</html>